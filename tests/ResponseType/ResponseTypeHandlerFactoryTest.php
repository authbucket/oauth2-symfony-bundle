<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\ResponseType;

use AuthBucket\Bundle\OAuth2Bundle\Tests\WebTestCase;
use AuthBucket\OAuth2\ResponseType\ResponseTypeHandlerFactory;

class ResponseTypeHandlerFactoryTest extends WebTestCase
{
    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testNonExistsResponseTypeHandler()
    {
        $classes = ['foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\NonExistsResponseTypeHandler'];
        $factory = new ResponseTypeHandlerFactory(
            $this->get('security.token_storage'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testBadAddResponseTypeHandler()
    {
        $classes = ['foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\FooResponseTypeHandler'];
        $factory = new ResponseTypeHandlerFactory(
            $this->get('security.token_storage'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testBadGetResponseTypeHandler()
    {
        $classes = ['bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\BarResponseTypeHandler'];
        $factory = new ResponseTypeHandlerFactory(
            $this->get('security.token_storage'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
        $handler = $factory->getResponseTypeHandler('foo');
    }

    public function testGoodGetResponseTypeHandler()
    {
        $classes = ['bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\BarResponseTypeHandler'];
        $factory = new ResponseTypeHandlerFactory(
            $this->get('security.token_storage'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            $classes
        );
        $handler = $factory->getResponseTypeHandler('bar');
        $this->assertSame($factory->getResponseTypeHandlers(), $classes);
    }
}
