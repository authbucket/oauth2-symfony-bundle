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
use Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\Entity\RefreshToken;

class RefreshTokenFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new RefreshToken();
        $model->setRefreshToken('288b5ea8e75d2b24368a79ed5ed9593b')
            ->setClientId('http://democlient3.com/')
            ->setExpires(new \DateTime('+1 days'))
            ->setUsername('demousername3')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            ));
        $manager->persist($model);

        $manager->flush();
    }
}
