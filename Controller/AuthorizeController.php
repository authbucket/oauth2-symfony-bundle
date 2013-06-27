<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Tests\TestBundle\Controller;

use PantaRei\OAuth2\Exception\InvalidRequestException;
use PantaRei\OAuth2\Model\ModelManagerFactoryInterface;
use PantaRei\OAuth2\ResponseType\ResponseTypeHandlerFactoryInterface;
use PantaRei\OAuth2\TokenType\TokenTypeHandlerFactoryInterface;
use PantaRei\OAuth2\Util\Filter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;

class AuthorizeController extends Controller
{
    public function authorizeAction()
    {
        $securityContext = $this->get('security.context');
        $request = $this->getRequest();
        $modelManagerFactory = $this->get('');
        $tokenTypeHandlerFactory = $this->get('');

        // Fetch response_type from GET.
        $response_type = $this->getResponseType($request);

        // Handle authorize endpoint response.
        return $this->responseTypeHandlerFactory->getResponseTypeHandler($response_type)->handle(
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
