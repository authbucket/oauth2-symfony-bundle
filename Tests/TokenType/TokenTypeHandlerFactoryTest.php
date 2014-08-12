<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\TokenType;

use AuthBucket\Bundle\OAuth2Bundle\Tests\WebTestCase;
use AuthBucket\OAuth2\TokenType\TokenTypeHandlerFactory;

class TokenTypeHandlerFactoryTest extends WebTestCase
{
    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testNonExistsTokenTypeHandler()
    {
        $tokenTypeHandlerFactory = new TokenTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('foo' => 'AuthBucket\\Bundle\OAuth2Bundle\\Tests\\TokenType\\NonExistsTokenTypeHandler')
        );
        $tokenTypeHandlerFactory->addTokenTypeHandler('foo', $tokenTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testBadAddTokenTypeHandler()
    {
        $tokenTypeHandlerFactory = new TokenTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\TokenType\\FooTokenTypeHandler')
        );
        $tokenTypeHandlerFactory->addTokenTypeHandler('foo', $tokenTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testEmptyGetTokenTypeHandler()
    {
        $tokenTypeHandlerFactory = new TokenTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory')
        );
        $tokenTypeHandlerFactory->getTokenTypeHandler();
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\ServerErrorException
     */
    public function testBadGetTokenTypeHandler()
    {
        $tokenTypeHandlerFactory = new TokenTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\TokenType\\BarTokenTypeHandler')
        );
        $tokenTypeHandlerFactory->getTokenTypeHandler('foo');
    }

    public function testGoodGetTokenTypeHandler()
    {
        $tokenTypeHandlerFactory = new TokenTypeHandlerFactory(
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\TokenType\\BarTokenTypeHandler')
        );
        $tokenTypeHandlerFactory->getTokenTypeHandler('bar');
    }
}
