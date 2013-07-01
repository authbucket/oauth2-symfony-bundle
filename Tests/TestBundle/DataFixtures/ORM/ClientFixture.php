<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\Entity\Client;

class ClientFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new Client();
        $model->setClientId('http://democlient1.com/')
            ->setClientSecret('demosecret1')
            ->setRedirectUri('http://democlient1.com/redirect_uri');
        $manager->persist($model);

        $model = new Client();
        $model->setClientId('http://democlient2.com/')
            ->setClientSecret('demosecret2')
            ->setRedirectUri('http://democlient2.com/redirect_uri');
        $manager->persist($model);

        $model = new Client();
        $model->setClientId('http://democlient3.com/')
            ->setClientSecret('demosecret3')
            ->setRedirectUri('http://democlient3.com/redirect_uri');
        $manager->persist($model);

        $model = new Client();
        $model->setClientId('http://democlient4.com/')
            ->setClientSecret('demosecret4');
        $manager->persist($model);

        $manager->flush();
    }
}
