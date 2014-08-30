<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle;

use AuthBucket\Bundle\OAuth2Bundle\DependencyInjection\AuthBucketOAuth2Extension;
use AuthBucket\Bundle\OAuth2Bundle\DependencyInjection\Security\Factory\ResourceFactory;
use AuthBucket\Bundle\OAuth2Bundle\DependencyInjection\Security\Factory\TokenFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AuthBucketOAuth2Bundle extends Bundle
{
    public function __construct()
    {
        $this->extension = new AuthBucketOAuth2Extension();
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new ResourceFactory());
        $extension->addSecurityListenerFactory(new TokenFactory());
    }
}
