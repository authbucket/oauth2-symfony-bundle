<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\OAuth2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\OAuth2\Model\AuthorizeInterface;

/**
 * Authorize
 *
 * @ORM\MappedSuperclass(repositoryClass="Pantarei\Bundle\OAuth2Bundle\Entity\AuthorizeRepository")
 */
class Authorize implements AuthorizeInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255)
     */
    protected $client_id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    protected $username;

    /**
     * @var array
     *
     * @ORM\Column(name="scope", type="array")
     */
    protected $scope;

    public function __construct(
        $client_id,
        $username,
        $scope = array()
    )
    {
        $this->client_id = $client_id;
        $this->username = $username;
        $this->scope = $scope;
    }

    /**
     * Get client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get scope
     *
     * @return array
     */
    public function getScope()
    {
        return $this->scope;
    }
}
