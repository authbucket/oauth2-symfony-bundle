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
use Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\Authorize;

class AuthorizeFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new Authorize();
        $model->setClientId('http://democlient1.com/')
            ->setUsername('demousername1')
            ->setScope(array(
                'demoscope1',
            ));
        $manager->persist($model);
        $model = new Authorize();
        $model->setClientId('http://democlient2.com/')
            ->setUsername('demousername2')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
            ));
        $manager->persist($model);
        $model = new Authorize();
        $model->setClientId('http://democlient3.com/')
            ->setUsername('demousername3')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            ));
        $manager->persist($model);
        $model = new Authorize();
        $model->setClientId('http://democlient1.com/')
            ->setUsername('')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            ));
        $manager->persist($model);

        $manager->flush();
    }
}
