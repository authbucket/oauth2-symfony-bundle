<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Tests\Controller;

use Pantarei\Bundle\Oauth2Bundle\Tests\WebTestCase;

class AuthorizeControllerTest extends WebTestCase
{
    public function testExceptionCodeNoClientId()
    {
        $parameters = array(
            'response_type' => 'code',
            'redirect_uri' => 'http://democlient1.com/redirect_uri',
        );
        $server = array(
            'PHP_AUTH_USER' => 'demousername1',
            'PHP_AUTH_PW' => 'demopassword1',
        );
        $client = static::createClient();
        $crawler = $client->request('GET', '/authorize', $parameters, array(), $server);
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
}
