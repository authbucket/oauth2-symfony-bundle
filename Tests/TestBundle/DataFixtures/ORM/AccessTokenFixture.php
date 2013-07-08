<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Tests\TestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PantaRei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\AccessToken;

class AccessTokenFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new AccessToken();
        $model->setAccessToken('eeb5aa92bbb4b56373b9e0d00bc02d93')
            ->setTokenType('bearer')
            ->setClientId('http://democlient1.com/')
            ->setExpires(new \DateTime('+1 hours'))
            ->setUsername('demousername1')
            ->setScope(array(
                'demoscope1',
            ));
        $manager->persist($model);

        $manager->flush();
    }
}
