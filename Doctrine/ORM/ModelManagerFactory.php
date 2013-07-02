<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Doctrine\ORM;

use Doctrine\ORM\EntityManager;
use Pantarei\Bundle\Oauth2Bundle\Model\AbstractModelManagerFactory;
use Pantarei\Oauth2\Exception\ServerErrorException;
use Pantarei\Oauth2\Model\ModelManagerInterface;

/**
 * Oauth2 model manager factory implemention.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class ModelManagerFactory extends AbstractModelManagerFactory
{
    public function __construct(EntityManager $em, array $models = array())
    {
        $managers = array();
        foreach ($models as $type => $model) {
            $manager = $em->getRepository($model);
            if (!$manager instanceof ModelManagerInterface) {
                throw new ServerErrorException();
            }
            $managers[$type] = $manager;
        }

        $this->managers = $managers;
    }
}
