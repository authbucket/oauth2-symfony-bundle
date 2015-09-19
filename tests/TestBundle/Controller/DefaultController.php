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

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\Common\Persistence\PersistentObject;
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('TestBundle::index.html.twig');
    }

    public function gettingStartedIndexAction(Request $request)
    {
        return $this->render('TestBundle:getting-started:index.html.twig');
    }

    public function adminRefreshDatabaseAction(Request $request)
    {
        $conn = $this->get('database_connection');
        $em = $this->get('doctrine')->getManager();

        $params = $conn->getParams();
        $name = isset($params['path']) ? $params['path'] : (isset($params['dbname']) ? $params['dbname'] : false);

        try {
            $conn->getSchemaManager()->dropDatabase($name);
            $conn->getSchemaManager()->createDatabase($name);
            $conn->close();
        } catch (\Exception $e) {
            return 1;
        }

        $classes = [];
        foreach ($this->container->getParameter('authbucket_oauth2.model') as $class) {
            $classes[] = $em->getClassMetadata($class);
        }

        PersistentObject::setObjectManager($em);
        $tool = new SchemaTool($em);
        $tool->dropSchema($classes);
        $tool->createSchema($classes);

        $purger = new ORMPurger();
        $executor = new ORMExecutor($em, $purger);

        $loader = new Loader();
        $loader->loadFromDirectory(__DIR__.'/../DataFixtures/ORM');
        $executor->execute($loader->getFixtures());

        return $this->redirect($this->get('router')->generate('index'));
    }
}
