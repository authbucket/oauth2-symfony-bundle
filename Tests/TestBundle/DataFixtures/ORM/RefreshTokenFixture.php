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
use Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\RefreshToken;

class RefreshTokenFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new RefreshToken(
            '288b5ea8e75d2b24368a79ed5ed9593b',
            'http://democlient3.com/',
            'demousername3',
            new \DateTime('+1 days'),
            array(
                'demoscope1',
                'demoscope2',
                'demoscope3',
            )
        );
        $manager->persist($model);
        $model = new RefreshToken(
            '5ff43cbc27b54202c6fd8bb9c2a308ce',
            'http://democlient1.com/',
            'demousername1',
            new \DateTime('-1 days'),
            array(
                'demoscope1',
            )
        );
        $manager->persist($model);

        $manager->flush();
    }
}
