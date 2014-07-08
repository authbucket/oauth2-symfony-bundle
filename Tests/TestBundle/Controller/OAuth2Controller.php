<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class OAuth2Controller extends Controller
{
    public function oauth2IndexAction(Request $request)
    {
        return $this->render('TestBundle:oauth2:index.html.twig');
    }
    
    public function oauth2LoginAction(Request $request)
    {
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request
                ->attributes
                ->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = $session
                ->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        return $this->render('TestBundle:oauth2:login.html.twig', array(
            'error' => $error,
            'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
        ));
    }
}
