<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle;

use Pantarei\Bundle\Oauth2Bundle\DependencyInjection\Security\Factory\ResourceFactory;
use Pantarei\Bundle\Oauth2Bundle\DependencyInjection\Security\Factory\TokenFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Oauth2Bundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new TokenFactory());
        $extension->addSecurityListenerFactory(new ResourceFactory());
    }
}
