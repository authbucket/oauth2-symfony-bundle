<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Controller;

use Pantarei\Oauth2\Exception\InvalidRequestException;
use Pantarei\Oauth2\Model\ModelManagerFactoryInterface;
use Pantarei\Oauth2\ResponseType\ResponseTypeHandlerFactoryInterface;
use Pantarei\Oauth2\TokenType\TokenTypeHandlerFactoryInterface;
use Pantarei\Oauth2\Util\Filter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;

class AuthorizeController extends Controller
{
    public function authorizeAction()
    {
        $securityContext = $this->container->get('security.context');
        $request = $this->container->get('request');
        $modelManagerFactory = $this->get('oauth2.model_manager.factory');
        $responseTypeHandlerFactory = $this->container->get('oauth2.response_handler.factory');
        $tokenTypeHandlerFactory = $this->container->get('oauth2.token_handler.factory');

        // Fetch response_type from GET.
        $response_type = $this->getResponseType($request);

        // Handle authorize endpoint response.
        return $responseTypeHandlerFactory->getResponseTypeHandler($response_type)->handle(
            $securityContext,
            $request,
            $modelManagerFactory,
            $tokenTypeHandlerFactory
        );
    }

    private function getResponseType(Request $request)
    {
        // Validate and set response_type.
        $response_type = $request->query->get('response_type');
        $query = array(
            'response_type' => $response_type
        );
        if (!Filter::filter($query)) {
            throw new InvalidRequestException();
        }

        return $response_type;
    }
}
