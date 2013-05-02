<?php

namespace Pantarei\Bundle\Oauth2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefreshTokens
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pantarei\Bundle\Oauth2Bundle\Entity\RefreshTokensRepository")
 */
class RefreshTokens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="refresh_token", type="string", length=255)
     */
    private $refreshToken;

    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255)
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="expires_in", type="integer")
     */
    private $expiresIn;

    /**
     * @var array
     *
     * @ORM\Column(name="scope", type="array")
     */
    private $scope;


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
     * Set refreshToken
     *
     * @param string $refreshToken
     * @return RefreshTokens
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    
        return $this;
    }

    /**
     * Get refreshToken
     *
     * @return string 
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     * @return RefreshTokens
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    
        return $this;
    }

    /**
     * Get clientId
     *
     * @return string 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set expiresIn
     *
     * @param integer $expiresIn
     * @return RefreshTokens
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
    
        return $this;
    }

    /**
     * Get expiresIn
     *
     * @return integer 
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return RefreshTokens
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
     * @return RefreshTokens
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
