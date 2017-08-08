<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Entity;

use AuthBucket\Bundle\OAuth2Bundle\Entity\RefreshToken as AbstractRefreshToken;
use Doctrine\ORM\Mapping as ORM;

/**
 * RefreshToken.
 *
 * @ORM\Table(name="authbucket_oauth2_refresh_token", uniqueConstraints={@ORM\UniqueConstraint(columns={"refresh_token"})})
 * @ORM\Entity(repositoryClass="AuthBucket\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\RefreshTokenRepository")
 */
class RefreshToken extends AbstractRefreshToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
