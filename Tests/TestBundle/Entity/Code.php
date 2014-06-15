<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AuthBucket\Bundle\OAuth2Bundle\Entity\Code as AbstractCode;

/**
 * Code
 *
 * @ORM\Table(name="test_code")
 * @ORM\Entity(repositoryClass="AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\CodeRepository")
 */
class Code extends AbstractCode
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
