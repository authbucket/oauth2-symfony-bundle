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

class ResourceControllerTest extends WebTestCase
{
    public function testEcho()
    {
        $parameters = array();
        $server = array(
            'HTTP_Authorization' => implode(' ', array('Bearer', 'eeb5aa92bbb4b56373b9e0d00bc02d93')),
        );
        $client = static::createClient();
        $crawler = $client->request('GET', '/resource/foo', $parameters, array(), $server);
        $this->assertEquals('foo', $client->getResponse()->getContent());
    }
}
