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

class DemoController extends Controller
{
    public function demoIndexAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoResponseTypeCodeAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoResponseTypeTokenAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoGrantTypeAuthorizationCodeAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoGrantTypePasswordAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoGrantTypeClientCredentialsAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoGrantTypeRefreshTokenAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
    
    public function demoDebugAction(Request $request)
    {
        return $this->render('TestBundle:demo:index.html.twig');
    }
}
