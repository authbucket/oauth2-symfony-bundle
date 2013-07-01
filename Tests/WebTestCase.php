<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Tests;

use Doctrine\Common\EventManager;
use Doctrine\Common\Persistence\PersistentObject;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\ORM\Tools\Setup;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as SymfonyWebTestCase;

/**
 * Extend Symfony\Bundle\FrameworkBundle\Test\WebTestCase for test case
 * require database and web interface setup.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
abstract class WebTestCase extends SymfonyWebTestCase
{
    protected $container;

    public function setUp()
    {
        // Initialize with parent's setUp().
        parent::setUp();
        #$this->createApplication();

        // Add tables and sample data.
        #$this->createSchema();
        #$this->addSampleData();
    }

    public function createApplication()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();

        $this->container = static::$kernel->getContainer();

        // Add model managers from ORM.
        $models = array(
            'access_token' => 'Pantarei\\Bundle\\Oauth2Bundle\\Tests\\TestBundle\\Entity\\AccessToken',
            'authorize' => 'Pantarei\\Bundle\\Oauth2Bundle\\Tests\\TestBundle\\Entity\\Authorize',
            'client' => 'Pantarei\\Bundle\\Oauth2Bundle\\Tests\\TestBundle\\Entity\\Client',
            'code' => 'Pantarei\\Bundle\\Oauth2Bundle\\Tests\\TestBundle\\Entity\\Code',
            'refresh_token' => 'Pantarei\\Bundle\\Oauth2Bundle\\Tests\\TestBundle\\Entity\\RefreshToken',
            'scope' => 'Pantarei\\Bundle\\Oauth2Bundle\\Tests\\TestBundle\\Entity\\Scope',
        );
        foreach ($models as $type => $model) {
            $modelManager = $this->container->get('doctrine')->getManager()->getRepository($model);
            $this->container->get('oauth2.model_manager.factory')->addModelManager($type, $modelManager);
        }
    }

    private function createSchema()
    {
        $em = $this->container->get('doctrine')->getManager();
        $modelManagerFactory = $this->container->get('oauth2.model_manager.factory');

        // Generate testing database schema.
        $classes = array(
            $em->getClassMetadata($modelManagerFactory->getModelManager('access_token')->getClassName()),
            $em->getClassMetadata($modelManagerFactory->getModelManager('authorize')->getClassName()),
            $em->getClassMetadata($modelManagerFactory->getModelManager('client')->getClassName()),
            $em->getClassMetadata($modelManagerFactory->getModelManager('code')->getClassName()),
            $em->getClassMetadata($modelManagerFactory->getModelManager('refresh_token')->getClassName()),
            $em->getClassMetadata($modelManagerFactory->getModelManager('scope')->getClassName()),
        );

        PersistentObject::setObjectManager($em);
        $tool = new SchemaTool($em);
        $tool->createSchema($classes);
    }

    private function addSampleData()
    {
        $modelManagerFactory = $this->container->get('oauth2.model_manager.factory');
        $encoderFactory = $this->container->get('security.encoder_factory');

        // Add demo access token.
        $modelManager = $modelManagerFactory->getModelManager('access_token');
        $model = $modelManager->createAccessToken();
        $model->setAccessToken('eeb5aa92bbb4b56373b9e0d00bc02d93')
            ->setTokenType('bearer')
            ->setClientId('http://democlient1.com/')
            ->setExpires(new \DateTime('+1 hours'))
            ->setUsername('demousername1')
            ->setScope(array(
                'demoscope1',
            ));
        $modelManager->updateAccessToken($model);

        // Add demo authorizes.
        $modelManager = $modelManagerFactory->getModelManager('authorize');
        $model = $modelManager->createAuthorize();
        $model->setClientId('http://democlient1.com/')
            ->setUsername('demousername1')
            ->setScope(array(
                'demoscope1',
            ));
        $modelManager->updateAuthorize($model);

        $model = $modelManager->createAuthorize();
        $model->setClientId('http://democlient2.com/')
            ->setUsername('demousername2')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
            ));
        $modelManager->updateAuthorize($model);

        $model = $modelManager->createAuthorize();
        $model->setClientId('http://democlient3.com/')
            ->setUsername('demousername3')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            ));
        $modelManager->updateAuthorize($model);

        $model = $modelManager->createAuthorize();
        $model->setClientId('http://democlient1.com/')
            ->setUsername('')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            ));
        $modelManager->updateAuthorize($model);

        // Add demo clients.
        $modelManager =  $modelManagerFactory->getModelManager('client');
        $model = $modelManager->createClient();
        $model->setClientId('http://democlient1.com/')
            ->setClientSecret('demosecret1')
            ->setRedirectUri('http://democlient1.com/redirect_uri');
        $modelManager->updateClient($model);

        $model = $modelManager->createClient();
        $model->setClientId('http://democlient2.com/')
            ->setClientSecret('demosecret2')
            ->setRedirectUri('http://democlient2.com/redirect_uri');
        $modelManager->updateClient($model);

        $model = $modelManager->createClient();
        $model->setClientId('http://democlient3.com/')
            ->setClientSecret('demosecret3')
            ->setRedirectUri('http://democlient3.com/redirect_uri');
        $modelManager->updateClient($model);

        // Add demo code.
        $modelManager = $modelManagerFactory->getModelManager('code');
        $model = $modelManager->createCode();
        $model->setCode('f0c68d250bcc729eb780a235371a9a55')
            ->setClientId('http://democlient2.com/')
            ->setRedirectUri('http://democlient2.com/redirect_uri')
            ->setExpires(new \DateTime('+10 minutes'))
            ->setUsername('demousername2')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
            ));
        $modelManager->updateCode($model);

        // Add demo refresh token.
        $modelManager = $modelManagerFactory->getModelManager('refresh_token');
        $model = $modelManager->createRefreshToken();
        $model->setRefreshToken('288b5ea8e75d2b24368a79ed5ed9593b')
            ->setClientId('http://democlient3.com/')
            ->setExpires(new \DateTime('+1 days'))
            ->setUsername('demousername3')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            ));
        $modelManager->updateRefreshToken($model);

        // Add demo scopes.
        $modelManager = $modelManagerFactory->getModelManager('scope');
        $model = $modelManager->createScope();
        $model->setScope('demoscope1');
        $modelManager->updateScope($model);

        $model = $modelManager->createScope();
        $model->setScope('demoscope2');
        $modelManager->updateScope($model);

        $model = $modelManager->createScope();
        $model->setScope('demoscope3');
        $modelManager->updateScope($model);
    }
}
