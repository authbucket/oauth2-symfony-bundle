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
        $classes = ['foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\NonExistsResourceTypeHandler'];
        $factory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $classes
        );
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testBadAddResourceTypeHandler()
    {
        $classes = ['foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\FooResourceTypeHandler'];
        $factory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $classes
        );
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testBadGetResourceTypeHandler()
    {
        $classes = ['bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\BarResourceTypeHandler'];
        $factory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $classes
        );
        $handler = $factory->getResourceTypeHandler('foo');
    }

    public function testGoodGetResourceTypeHandler()
    {
        $classes = ['bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResourceType\\BarResourceTypeHandler'];
        $factory = new ResourceTypeHandlerFactory(
            $this->get('http_kernel'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $classes
        );
        $handler = $factory->getResourceTypeHandler('bar');
        $this->assertSame($factory->getResourceTypeHandlers(), $classes);
    }
}
