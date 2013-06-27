<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ResourceControllerTest extends WebTestCase
{
    public function testEcho()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/resource/foo');
        $this->assertEquals('foo', $client->getResponse()->getContent());

        #$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
}
