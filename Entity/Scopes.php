<?php

namespace Pantarei\Bundle\Oauth2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scopes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pantarei\Bundle\Oauth2Bundle\Entity\ScopesRepository")
 */
class Scopes
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
     * @ORM\Column(name="scope", type="string", length=255)
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
     * Set scope
     *
     * @param string $scope
     * @return Scopes
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    
        return $this;
    }

    /**
     * Get scope
     *
     * @return string 
     */
    public function getScope()
    {
        return $this->scope;
    }
}
