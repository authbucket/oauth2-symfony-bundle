<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Entity;

use PantaRei\OAuth2\Model\AuthorizeInterface;

/**
 * Authorize
 */
abstract class AbstractAuthorize implements AuthorizeInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var array
     */
    protected $scope;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set client_id
     *
     * @param string $client_id
     * @return Authorize
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
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
     * Set username
     *
     * @param string $username
     * @return Authorize
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
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
     * Set scope
     *
     * @param array $scope
     * @return Authorize
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
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
