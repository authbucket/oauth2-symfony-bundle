<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\Oauth2\Model\AccessTokenInterface;

/**
 * AccessToken
 */
class AccessToken implements AccessTokenInterface
{
    /**
     * @var string
     */
    protected $access_token;

    /**
     * @var string
     */
    protected $token_type;

    /**
     * @var string
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var \DateTime
     */
    protected $expires;

    /**
     * @var array
     */
    protected $scope;

    /**
     * Set access_token
     *
     * @param string $access_token
     * @return AccessToken
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;

        return $this;
    }

    /**
     * Get access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Set token_type
     *
     * @param string $token_type
     * @return AccessToken
     */
    public function setTokenType($token_type)
    {
        $this->token_type = $token_type;

        return $this;
    }

    /**
     * Get token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * Set client_id
     *
     * @param string $client_id
     * @return AccessToken
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
     * @return AccessToken
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
     * Set expires
     *
     * @param \DateTime $expires
     * @return AccessToken
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set scope
     *
     * @param array $scope
     * @return AccessToken
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
