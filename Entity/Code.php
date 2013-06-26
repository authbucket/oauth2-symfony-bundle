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

use PantaRei\OAuth2\Model\AbstractCode;

/**
 * Code
 */
class Code extends AbstractCode
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $redirect_uri;

    /**
     * @var \DateTime
     */
    protected $expires;

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

    public function __construct()
    {
        $this->redirect_uri = '';
    }
}
