<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\Client;

class ClientFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new Client(
            'http://democlient1.com/',
            'demosecret1',
            'http://democlient1.com/redirect_uri'
        );
        $manager->persist($model);
        $model = new Client(
            'http://democlient2.com/',
            'demosecret2',
            'http://democlient2.com/redirect_uri'
        );
        $manager->persist($model);
        $model = new Client(
            'http://democlient3.com/',
            'demosecret3',
            'http://democlient3.com/redirect_uri'
        );
        $manager->persist($model);
        $model = new Client(
            'http://democlient4.com/',
            'demosecret4'
        );
        $manager->persist($model);

        $manager->flush();
    }
}
