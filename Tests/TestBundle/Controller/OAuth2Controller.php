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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class OAuth2Controller extends Controller
{
    public function oauth2IndexAction(Request $request)
    {
        return $this->render('TestBundle:oauth2:index.html.twig');
    }

    public function oauth2LoginAction(Request $request)
    {
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        $_username = $session->get('_username');
        $_password = $session->get('_password');

        return $this->render('TestBundle:oauth2:login.html.twig', array(
            'error' => $error,
            '_username' => $_username,
            '_password' => $_password,
        ));
    }
}
