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
use Pantarei\OAuth2\Model\ScopeInterface;

/**
 * Scope
 *
 * @ORM\MappedSuperclass(repositoryClass="Pantarei\Bundle\OAuth2Bundle\Entity\ScopeRepository")
 */
class Scope implements ScopeInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=255)
     */
    protected $scope;

    public function __construct(
        $scope
    )
    {
        $this->scope = $scope;
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
