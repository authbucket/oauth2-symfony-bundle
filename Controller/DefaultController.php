<?php

namespace Pantarei\Bundle\Oauth2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function authorizeAction($name = 'authorize')
    {
        return $this->render('PantareiOauth2Bundle:Default:index.html.twig', array('name' => $name));
    }

    public function tokenAction($name = 'token')
    {
        return $this->render('PantareiOauth2Bundle:Default:index.html.twig', array('name' => $name));
    }

    public function resourceAction($name = 'resource')
    {
        return $this->render('PantareiOauth2Bundle:Default:index.html.twig', array('name' => $name));
    }
}
