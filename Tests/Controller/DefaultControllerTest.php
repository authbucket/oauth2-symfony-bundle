<?php

namespace Pantarei\Bundle\Oauth2Bundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testAuthorize()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/authorize/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
}
