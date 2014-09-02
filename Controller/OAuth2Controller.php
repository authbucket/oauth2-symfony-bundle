<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OAuth2Controller extends Controller
{
    public function authorizeAction(Request $request)
    {
        return $this->get('authbucket_oauth2.oauth2_controller')->authorizeAction($request);
    }

    public function tokenAction(Request $request)
    {
        return $this->get('authbucket_oauth2.oauth2_controller')->tokenAction($request);
    }

    public function debugAction(Request $request)
    {
        return $this->get('authbucket_oauth2.oauth2_controller')->debugAction($request);
    }
}
