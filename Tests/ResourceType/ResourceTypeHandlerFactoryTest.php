<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\ResourceType;

use AuthBucket\Bundle\OAuth2Bundle\Tests\WebTestCase;
use AuthBucket\OAuth2\ResourceType\ResourceTypeHandlerFactory;

class ResourceTypeHandlerFactoryTest extends WebTestCase
{
    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testNonExistsResourceTypeHandler()
    {
        $resourceTypeHandlerFactory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\NonExistsResourceTypeHandler')
        );
        $resourceTypeHandlerFactory->addResourceTypeHandler('foo', $responseTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testBadAddResourceTypeHandler()
    {
        $resourceTypeHandlerFactory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\FooResourceTypeHandler')
        );
        $resourceTypeHandlerFactory->addResourceTypeHandler('foo', $responseTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testBadGetResourceTypeHandler()
    {
        $resourceTypeHandlerFactory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\BarResourceTypeHandler')
        );
        $resourceTypeHandlerFactory->getResourceTypeHandler('foo');
    }

    public function testGoodGetResourceTypeHandler()
    {
        $resourceTypeHandlerFactory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\BarResourceTypeHandler')
        );
        $resourceTypeHandlerFactory->getResourceTypeHandler('bar');
    }
}
