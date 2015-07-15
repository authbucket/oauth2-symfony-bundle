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

use AuthBucket\OAuth2\Model\ClientInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client.
 *
 * @ORM\MappedSuperclass(repositoryClass="AuthBucket\Bundle\OAuth2Bundle\Entity\ClientRepository")
 */
abstract class Client implements ClientInterface
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
     * @ORM\Column(name="client_secret", type="string", length=255)
     */
    protected $clientSecret;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_uri", type="text")
     */
    protected $redirectUri;

    /**
     * Set client_id.
     *
     * @param string $clientId
     *
     * @return Client
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
     * Set client_secret.
     *
     * @param string $clientSecret
     *
     * @return Client
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * Get client_secret.
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Set redirect_uri.
     *
     * @param string $redirectUri
     *
     * @return Client
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    /**
     * Get redirect_uri.
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }
}
