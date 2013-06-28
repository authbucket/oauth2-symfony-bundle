<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\Bundle\Oauth2Bundle\Entity\AbstractScope;

/**
 * Scope
 *
 * @ORM\Table(name="scope")
 * @ORM\Entity(repositoryClass="Pantarei\Bundle\Oauth2Bundle\Tests\TestBundle\Entity\ScopeManager")
 */
class Scope extends AbstractScope
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=255)
     */
    protected $scope;
}
