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
use Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\Code;

class CodeFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new Code(
            'f0c68d250bcc729eb780a235371a9a55',
            'http://democlient2.com/',
            'demousername2',
            'http://democlient2.com/redirect_uri',
            new \DateTime('+10 minutes'),
            array(
                'demoscope1',
                'demoscope2',
            )
        );
        $manager->persist($model);
        $model = new Code(
            '1e5aa97ddaf4b0228dfb4223010d4417',
            'http://democlient1.com/',
            'demousername1',
            'http://democlient1.com/redirect_uri',
            new \DateTime('-10 minutes'),
            array(
                'demoscope1',
            )
        );
        $manager->persist($model);
        $model = new Code(
            '08fb55e26c84f8cb060b7803bc177af8',
            'http://democlient4.com/',
            'demousername4',
            'http://democlient4.com/redirect_uri',
            new \DateTime('+10 minutes'),
            array(
                'demoscope1',
            )
        );
        $manager->persist($model);

        $manager->flush();
    }
}
