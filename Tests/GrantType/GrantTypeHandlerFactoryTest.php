<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
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
        $grantTypeHandlerFactory = new GrantTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('security.user_checker'),
            $this->get('security.encoder_factory'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            null,
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\NonExistsGrantTypeHandler')
        );
        $grantTypeHandlerFactory->addGrantTypeHandler('foo', $grantTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedGrantTypeException
     */
    public function testBadAddGrantTypeHandler()
    {
        $grantTypeHandlerFactory = new GrantTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('security.user_checker'),
            $this->get('security.encoder_factory'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            null,
            array('foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\FooGrantTypeHandler')
        );
        $grantTypeHandlerFactory->addGrantTypeHandler('foo', $grantTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedGrantTypeException
     */
    public function testBadGetGrantTypeHandler()
    {
        $grantTypeHandlerFactory = new GrantTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('security.user_checker'),
            $this->get('security.encoder_factory'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            null,
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\BarGrantTypeHandler')
        );
        $grantTypeHandlerFactory->getGrantTypeHandler('foo');
    }

    public function testGoodGetGrantTypeHandler()
    {
        $grantTypeHandlerFactory = new GrantTypeHandlerFactory(
            $this->get('security.context'),
            $this->get('security.user_checker'),
            $this->get('security.encoder_factory'),
            $this->get('validator'),
            $this->get('authbucket_oauth2.model_manager.factory'),
            $this->get('authbucket_oauth2.token_handler.factory'),
            null,
            array('bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\GrantType\\BarGrantTypeHandler')
        );
        $grantTypeHandlerFactory->getGrantTypeHandler('bar');
    }
}
