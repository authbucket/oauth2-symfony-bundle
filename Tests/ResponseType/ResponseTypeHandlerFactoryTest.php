<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
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
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\NonExistsResponseTypeHandler')
        );
        $responseTypeHandlerFactory->addResponseTypeHandler('foo', $responseTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testBadAddResponseTypeHandler()
    {
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\FooResponseTypeHandler')
        );
        $responseTypeHandlerFactory->addResponseTypeHandler('foo', $responseTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testBadGetResponseTypeHandler()
    {
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\BarResponseTypeHandler')
        );
        $responseTypeHandlerFactory->getResponseTypeHandler('foo');
    }

    public function testGoodGetResponseTypeHandler()
    {
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\BarResponseTypeHandler')
        );
        $responseTypeHandlerFactory->getResponseTypeHandler('bar');
    }
}
