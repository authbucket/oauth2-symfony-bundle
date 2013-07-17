<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\Bundle\OAuth2Bundle\Entity\Authorize as AbstractAuthorize;

/**
 * Authorize
 *
 * @ORM\Table(name="authorize")
 * @ORM\Entity(repositoryClass="Pantarei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\AuthorizeRepository")
 */
class Authorize extends AbstractAuthorize
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
