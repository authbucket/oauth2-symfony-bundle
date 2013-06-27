<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PantaRei\Bundle\OAuth2Bundle\Entity\AbstractClient;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="PantaRei\Bundle\OAuth2Bundle\Tests\TestBundle\Entity\ClientManager")
 */
class Client extends AbstractClient
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
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255)
     */
    protected $client_id;

    /**
     * @var string
     *
     * @ORM\Column(name="client_secret", type="string", length=255)
     */
    protected $client_secret;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_uri", type="blob")
     */
    protected $redirect_uri;
}
