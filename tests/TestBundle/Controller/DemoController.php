<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Controller;

use AuthBucket\OAuth2\Exception\InvalidScopeException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Client;
use Symfony\Component\Security\Core\Security;

class DemoController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(Security::AUTHENTICATION_ERROR);
        }

        $_username = $session->get('_username');
        $_password = $session->get('_password');

        return $this->render('TestBundle:demo:login.html.twig', [
            'error' => $error,
            '_username' => $_username,
            '_password' => $_password,
        ]);
    }

    public function authorizeAction(Request $request)
    {
        // We only handle non-authorized scope here.
        try {
            return $this->get('authbucket_oauth2.oauth2_controller')->authorizeAction($request);
        } catch (InvalidScopeException $exception) {
            $message = unserialize($exception->getMessage());
            if ($message['error_description'] !== 'The requested scope is invalid.') {
                throw $exception;
            }
        }

        // Fetch parameters, which already checked.
        $clientId = $request->query->get('client_id');
        $username = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
        $scope = preg_split('/\s+/', $request->query->get('scope', ''));

        // Create form.
        $form = $this->createFormBuilder()->getForm();
        $form->handleRequest($request);

        // Save authorized scope if submitted by POST.
        if ($form->isValid()) {
            $modelManagerFactory = $this->get('authbucket_oauth2.model_manager.factory');
            $authorizeManager = $modelManagerFactory->getModelManager('authorize');

            // Update existing authorization if possible, else create new.
            $authorize = $authorizeManager->readModelOneBy([
                'clientId' => $clientId,
                'username' => $username,
            ]);
            if ($authorize === null) {
                $class = $authorizeManager->getClassName();
                $authorize = new $class();
                $authorize->setClientId($clientId)
                    ->setUsername($username)
                    ->setScope((array) $scope);
                $authorize = $authorizeManager->createModel($authorize);
            } else {
                $authorize->setClientId($clientId)
                    ->setUsername($username)
                    ->setScope(array_merge((array) $authorize->getScope(), $scope));
                $authorizeManager->updateModel($authorize);
            }

            // Back to this path, with original GET parameters.
            return $this->redirect($request->getRequestUri());
        }

        // Display the form.
        $authorizationRequest = $request->query->all();

        return $this->render('TestBundle:demo:authorize.html.twig', [
            'client_id' => $clientId,
            'username' => $username,
            'scopes' => $scope,
            'form' => $form->createView(),
            'authorization_request' => $authorizationRequest,
        ]);
    }

    public function requestCodeAction(Request $request)
    {
        $session = $request->getSession();

        $_username = $session->get('_username', substr(md5(uniqid(null, true)), 0, 8));
        $_password = $session->get('_password', substr(md5(uniqid(null, true)), 0, 8));

        $session->set('_username', $_username);
        $session->set('_password', $_password);

        $userManager = $this->get('authbucket_oauth2.model_manager.factory')->getModelManager('user');
        $user = $userManager->createUser()
            ->setUsername($_username)
            ->setPassword($_password)
            ->setRoles([
                'ROLE_USER',
            ]);
        $userManager->updateUser($user);

        $parameters = [
            'response_type' => 'code',
            'client_id' => 'authorization_code_grant',
            'redirect_uri' => $request->getUriForPath('/demo/response_type/code'),
            'scope' => 'demoscope1 demoscope2 demoscope3',
            'state' => $session->getId(),
        ];

        $url = Request::create($request->getUriForPath('/demo/authorize'), 'GET', $parameters)->getUri();

        return $this->redirect($url);
    }

    public function requestTokenAction(Request $request)
    {
        $session = $request->getSession();

        $_username = $session->get('_username', substr(md5(uniqid(null, true)), 0, 8));
        $_password = $session->get('_password', substr(md5(uniqid(null, true)), 0, 8));

        $session->set('_username', $_username);
        $session->set('_password', $_password);

        $userManager = $this->get('authbucket_oauth2.model_manager.factory')->getModelManager('user');
        $user = $userManager->createUser()
            ->setUsername($_username)
            ->setPassword($_password)
            ->setRoles([
                'ROLE_USER',
            ]);
        $userManager->updateUser($user);

        $parameters = [
            'response_type' => 'token',
            'client_id' => 'implicit_grant',
            'redirect_uri' => $request->getUriForPath('/demo/response_type/token'),
            'scope' => 'demoscope1 demoscope2 demoscope3',
            'state' => $session->getId(),
        ];

        $url = Request::create($request->getUriForPath('/demo/authorize'), 'GET', $parameters)->getUri();

        return $this->redirect($url);
    }

    public function responseTypeCodeAction(Request $request)
    {
        $authorizationResponse = $request->query->all();

        $tokenPath = $this->get('router')->generate('demo_grant_type_authorization_code', [
            'code' => $authorizationResponse['code'],
        ]);

        return $this->render('TestBundle:demo/response_type:code.html.twig', [
            'authorization_response' => $authorizationResponse,
            'token_path' => $tokenPath,
        ]);
    }

    public function responseTypeTokenAction(Request $request)
    {
        $accessTokenResponse = $request->query->all();

        $modelPath = $this->get('router')->generate('demo_resource_type_model', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $debugPath = $this->get('router')->generate('demo_resource_type_debug_endpoint', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);

        return $this->render('TestBundle:demo/response_type:token.html.twig', [
            'access_token_response' => $accessTokenResponse,
            'model_path' => $modelPath,
            'debug_path' => $debugPath,
        ]);
    }

    public function grantTypeAuthorizationCodeAction(Request $request)
    {
        $parameters = [
            'grant_type' => 'authorization_code',
            'code' => $request->query->get('code'),
            'redirect_uri' => $request->getUriForPath('/demo/response_type/code'),
            'client_id' => 'authorization_code_grant',
            'client_secret' => 'uoce8AeP',
        ];
        $server = [];
        $client = new Client($this->get('kernel'));
        $crawler = $client->request('POST', '/api/oauth2/token', $parameters, [], $server);
        $accessTokenResponse = json_decode($client->getResponse()->getContent(), true);
        $accessTokenRequest = get_object_vars($client->getRequest());

        $modelPath = $this->get('router')->generate('demo_resource_type_model', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $debugPath = $this->get('router')->generate('demo_resource_type_debug_endpoint', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $refreshPath = $this->get('router')->generate('demo_grant_type_refresh_token', [
            'username' => 'authorization_code_grant',
            'password' => 'uoce8AeP',
            'refresh_token' => $accessTokenResponse['refresh_token'],
        ]);

        return $this->render('TestBundle:demo/grant_type:authorization_code.html.twig', [
            'access_token_response' => $accessTokenResponse,
            'access_token_request' => $accessTokenRequest,
            'model_path' => $modelPath,
            'debug_path' => $debugPath,
            'refresh_path' => $refreshPath,
        ]);
    }

    public function grantTypePasswordAction(Request $request)
    {
        $parameters = [
            'grant_type' => 'password',
            'username' => 'demousername1',
            'password' => 'demopassword1',
            'scope' => 'demoscope1',
        ];
        $server = [
            'PHP_AUTH_USER' => 'resource_owner_password_credentials_grant',
            'PHP_AUTH_PW' => 'Eevahph6',
        ];
        $client = new Client($this->get('kernel'));
        $crawler = $client->request('POST', '/api/oauth2/token', $parameters, [], $server);
        $accessTokenResponse = json_decode($client->getResponse()->getContent(), true);
        $accessTokenRequest = get_object_vars($client->getRequest());

        $modelPath = $this->get('router')->generate('demo_resource_type_model', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $debugPath = $this->get('router')->generate('demo_resource_type_debug_endpoint', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $refreshPath = $this->get('router')->generate('demo_grant_type_refresh_token', [
            'username' => 'resource_owner_password_credentials_grant',
            'password' => 'Eevahph6',
            'refresh_token' => $accessTokenResponse['refresh_token'],
        ]);

        return $this->render('TestBundle:demo/grant_type:password.html.twig', [
            'access_token_response' => $accessTokenResponse,
            'access_token_request' => $accessTokenRequest,
            'model_path' => $modelPath,
            'debug_path' => $debugPath,
            'refresh_path' => $refreshPath,
        ]);
    }

    public function grantTypeClientCredentialsAction(Request $request)
    {
        $parameters = [
            'grant_type' => 'client_credentials',
            'scope' => 'demoscope1',
        ];
        $server = [
            'PHP_AUTH_USER' => 'client_credentials_grant',
            'PHP_AUTH_PW' => 'yib6aiFe',
        ];
        $client = new Client($this->get('kernel'));
        $crawler = $client->request('POST', '/api/oauth2/token', $parameters, [], $server);
        $accessTokenResponse = json_decode($client->getResponse()->getContent(), true);
        $accessTokenRequest = get_object_vars($client->getRequest());

        $modelPath = $this->get('router')->generate('demo_resource_type_model', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $debugPath = $this->get('router')->generate('demo_resource_type_debug_endpoint', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $refreshPath = $this->get('router')->generate('demo_grant_type_refresh_token', [
            'username' => 'client_credentials_grant',
            'password' => 'yib6aiFe',
            'refresh_token' => $accessTokenResponse['refresh_token'],
        ]);

        return $this->render('TestBundle:demo/grant_type:client_credentials.html.twig', [
            'access_token_response' => $accessTokenResponse,
            'access_token_request' => $accessTokenRequest,
            'model_path' => $modelPath,
            'debug_path' => $debugPath,
            'refresh_path' => $refreshPath,
        ]);
    }

    public function grantTypeRefreshTokenAction(Request $request)
    {
        $parameters = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $request->query->get('refresh_token'),
        ];
        $server = [
            'PHP_AUTH_USER' => $request->query->get('username'),
            'PHP_AUTH_PW' => $request->query->get('password'),
        ];
        $client = new Client($this->get('kernel'));
        $crawler = $client->request('POST', '/api/oauth2/token', $parameters, [], $server);
        $accessTokenResponse = json_decode($client->getResponse()->getContent(), true);
        $accessTokenRequest = get_object_vars($client->getRequest());

        $modelPath = $this->get('router')->generate('demo_resource_type_model', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $debugPath = $this->get('router')->generate('demo_resource_type_debug_endpoint', [
            'access_token' => $accessTokenResponse['access_token'],
        ]);
        $refreshPath = $this->get('router')->generate('demo_grant_type_refresh_token', [
            'username' => $request->query->get('username'),
            'password' => $request->query->get('password'),
            'refresh_token' => $accessTokenResponse['refresh_token'],
        ]);

        return $this->render('TestBundle:demo/grant_type:refresh_token.html.twig', [
            'access_token_response' => $accessTokenResponse,
            'access_token_request' => $accessTokenRequest,
            'model_path' => $modelPath,
            'debug_path' => $debugPath,
            'refresh_path' => $refreshPath,
        ]);
    }

    public function resourceTypeModelAction(Request $request)
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', $request->query->get('access_token')]),
        ];
        $client = new Client($this->get('kernel'));
        $crawler = $client->request('GET', '/api/resource/model', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $resourceRequest = get_object_vars($client->getRequest());

        return $this->render('TestBundle:demo/resource_type:model.html.twig', [
            'resource_response' => $resourceResponse,
            'resource_request' => $resourceRequest,
        ]);
    }

    public function resourceTypeDebugEndpointAction(Request $request)
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', $request->query->get('access_token')]),
        ];
        $client = new Client($this->get('kernel'));
        $crawler = $client->request('GET', '/api/resource/debug_endpoint', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $resourceRequest = get_object_vars($client->getRequest());

        return $this->render('TestBundle:demo/resource_type:debug_endpoint.html.twig', [
            'resource_response' => $resourceResponse,
            'resource_request' => $resourceRequest,
        ]);
    }
}
