<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\Entity;

use AuthBucket\OAuth2\Model\AuthorizeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Authorize.
 *
 * @ORM\MappedSuperclass(repositoryClass="AuthBucket\Bundle\OAuth2Bundle\Entity\AuthorizeRepository")
 */
abstract class Authorize implements AuthorizeInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255)
     */
    protected $clientId;

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

    /**
     * @var array
     *
     * @ORM\Column(name="grant_type", type="array")
     */
    protected $grantType;

    /**
     * Set client_id.
     *
     * @param string $clientId
     *
     * @return Authorize
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get client_id.
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set username.
     *
     * @param string $username
     *
     * @return Authorize
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set scope.
     *
     * @param array $scope
     *
     * @return Authorize
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope.
     *
     * @return array
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set grant type.
     *
     * @param array $grantType
     *
     * @return Authorize
     */
    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;

        return $this;
    }

    /**
     * Get grant type.
     *
     * @return array
     */
    public function getGrantType()
    {
        return $this->grantType;
    }
}
