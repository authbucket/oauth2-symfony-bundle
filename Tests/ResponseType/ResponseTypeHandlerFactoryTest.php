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

use AuthBucket\OAuth2\ResponseType\ResponseTypeHandlerFactory;

class ResponseTypeHandlerFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testBadAddResponseTypeHandler()
    {
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(array(
            'foo' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\FooResponseTypeHandler',
        ));
        $responseTypeHandlerFactory->addResponseTypeHandler('foo', $responseTypeHandler);
    }

    /**
     * @expectedException \AuthBucket\OAuth2\Exception\UnsupportedResponseTypeException
     */
    public function testBadGetResponseTypeHandler()
    {
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(array(
            'bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\BarResponseTypeHandler',
        ));
        $responseTypeHandlerFactory->getResponseTypeHandler('foo');
    }

    public function testGoodGetResponseTypeHandler()
    {
        $responseTypeHandlerFactory = new ResponseTypeHandlerFactory(array(
            'bar' => 'AuthBucket\\Bundle\\OAuth2Bundle\\Tests\\ResponseType\\BarResponseTypeHandler',
        ));
        $responseTypeHandlerFactory->getResponseTypeHandler('bar');
    }
}
