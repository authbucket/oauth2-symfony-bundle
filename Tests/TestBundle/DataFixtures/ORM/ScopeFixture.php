<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\DataFixtures\ORM;

use AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\Scope;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ScopeFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $model = new Scope();
        $model->setScope('debug');
        $manager->persist($model);

        $model = new Scope();
        $model->setScope('demoscope1');
        $manager->persist($model);

        $model = new Scope();
        $model->setScope('demoscope2');
        $manager->persist($model);

        $model = new Scope();
        $model->setScope('demoscope3');
        $manager->persist($model);

        $manager->flush();
    }
}
