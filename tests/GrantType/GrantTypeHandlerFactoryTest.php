<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\GrantType;

use AuthBucket\Bundle\OAuth2Bundle\Tests\WebTestCase;
use AuthBucket\OAuth2\GrantType\GrantTypeHandlerFactory;

class GrantTypeHandlerFactoryTest extends WebTestCase
{
    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedGrantTypeException
     */
    public function testNonExistsGrantTypeHandler()
    {
        $classes = ['foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\NonExistsGrantTypeHandler'];
        $factory = new GrantTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedGrantTypeException
     */
    public function testBadAddGrantTypeHandler()
    {
        $classes = ['foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\FooGrantTypeHandler'];
        $factory = new GrantTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedGrantTypeException
     */
    public function testBadGetGrantTypeHandler()
    {
        $classes = ['bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\BarGrantTypeHandler'];
        $factory = new GrantTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
        $handler = $factory->getGrantTypeHandler('foo');
    }

    public function testGoodGetGrantTypeHandler()
    {
        $classes = ['bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\BarGrantTypeHandler'];
        $factory = new GrantTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
        $handler = $factory->getGrantTypeHandler('bar');
        $this->assertSame($factory->getGrantTypeHandlers(), $classes);
    }
}
