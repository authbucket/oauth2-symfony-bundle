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

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthorizeControllerTest extends WebTestCase
{
    public function testGoodCode()
    {
#        $client = static::createClient();
#        var_dump($client->getContainer()->get('oauth2.model_manager.factory'));
#        var_dump($client->getContainer()->get('oauth2.response_handler.factory'));
#        var_dump($client->getContainer()->get('oauth2.grant_handler.factory'));
#        var_dump($client->getContainer()->get('oauth2.token_handler.factory'));

#        $parameters = array(
#            'response_type' => 'code',
#            'client_id' => 'http://democlient1.com/',
#            'redirect_uri' => 'http://democlient1.com/redirect_uri',
#        );
#        $server = array(
#            'PHP_AUTH_USER' => 'demousername1',
#            'PHP_AUTH_PW' => 'demopassword1',
#        );
#        $client = static::createClient();
#        $crawler = $client->request('GET', '/authorize', $parameters, array(), $server);
#        $this->assertTrue($client->getResponse()->isRedirect());
    }
}
