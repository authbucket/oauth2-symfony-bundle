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
use Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\Entity\Code;

class CodeFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new Code();
        $model->setCode('f0c68d250bcc729eb780a235371a9a55')
            ->setClientId('http://democlient2.com/')
            ->setRedirectUri('http://democlient2.com/redirect_uri')
            ->setExpires(new \DateTime('+10 minutes'))
            ->setUsername('demousername2')
            ->setScope(array(
                'demoscope1',
                'demoscope2',
            ));
        $manager->persist($model);

        $manager->flush();
    }
}
