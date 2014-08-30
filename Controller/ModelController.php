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

class ModelController extends Controller
{
    public function createModelAction(Request $request, $type)
    {
        return $this->get('authbucket_oauth2.model_controller')->createModelAction($request, $type);
    }

    public function readModelAction(Request $request, $type, $id)
    {
        return $this->get('authbucket_oauth2.model_controller')->readModelAction($request, $type, $id);
    }

    public function updateModelAction(Request $request, $type, $id)
    {
        return $this->get('authbucket_oauth2.model_controller')->updateModelAction($request, $type, $id);
    }

    public function deleteModelAction(Request $request, $type, $id)
    {
        return $this->get('authbucket_oauth2.model_controller')->deleteModelAction($request, $type, $id);
    }

    public function listModelAction(Request $request, $type)
    {
        return $this->get('authbucket_oauth2.model_controller')->listModelAction($request, $type);
    }
}
