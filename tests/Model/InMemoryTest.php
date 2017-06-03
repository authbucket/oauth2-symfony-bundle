<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Buneld\OAuth2Bundle\Tests\Model;

use AuthBucket\Bundle\OAuth2Bundle\Tests\WebTestCase;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpFoundation\Request;

class InMemoryTest extends WebTestCase
{
    /**
     * @group legacy
     */
    public function setUp()
    {
        parent::setUp();

        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../src/Resources/config'));
        $loader->load('in_memory.yml');
        $container->compile();

        $this->set(
            'authbucket_oauth2.model_manager.factory',
            $container->get('authbucket_oauth2.model_manager.factory')
        );

        $accessTokenManager = $this->get('authbucket_oauth2.model_manager.factory')->getModelManager('access_token');
        $className = $accessTokenManager->getClassName();

        $model = new $className();
        $model->setAccessToken('eeb5aa92bbb4b56373b9e0d00bc02d93')
            ->setTokenType('bearer')
            ->setClientId('http://democlient1.com/')
            ->setUsername('demousername1')
            ->setExpires(new \DateTime('+1 hours'))
            ->setScope([
                'demoscope1',
            ]);
        $accessTokenManager->createModel($model);

        $model = new $className();
        $model->setAccessToken('d2b58c4c6bc0cc9fefca2d558f1221a5')
            ->setTokenType('bearer')
            ->setClientId('http://democlient1.com/')
            ->setUsername('demousername1')
            ->setExpires(new \DateTime('-1 hours'))
            ->setScope([
                'demoscope1',
            ]);
        $accessTokenManager->createModel($model);
    }

    public function testExceptionBadAccessToken()
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', "aaa\x19bbb\x5Cccc\x7Fddd"]),
        ];
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/resource/debug_endpoint', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertSame('invalid_request', $resourceResponse['error']);
    }

    public function testExceptionNotExistsAccessToken()
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', 'abcd']),
        ];
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/resource/debug_endpoint', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertSame('invalid_request', $resourceResponse['error']);
    }

    public function testExceptionExpiredAccessToken()
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', 'd2b58c4c6bc0cc9fefca2d558f1221a5']),
        ];
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/resource/debug_endpoint', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertSame('invalid_request', $resourceResponse['error']);
    }

    public function testExceptionInvalidParameter()
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', 'eeb5aa92bbb4b56373b9e0d00bc02d93']),
        ];
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/resource/debug_endpoint/invalid_options', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertSame('server_error', $resourceResponse['error']);
    }

    public function testGoodAccessToken()
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', 'eeb5aa92bbb4b56373b9e0d00bc02d93']),
        ];
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/resource/debug_endpoint', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertSame('demousername1', $resourceResponse['username']);
    }

    public function testGoodAccessTokenCached()
    {
        $parameters = [];
        $server = [
            'HTTP_Authorization' => implode(' ', ['Bearer', 'eeb5aa92bbb4b56373b9e0d00bc02d93']),
        ];
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/resource/debug_endpoint/cache', $parameters, [], $server);
        $resourceResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertSame('demousername1', $resourceResponse['username']);
    }
}
