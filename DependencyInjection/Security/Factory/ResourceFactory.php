<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\DependencyInjection\Security\Factory;

use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Reference;

class ResourceFactory implements SecurityFactoryInterface
{
    public function create(
        ContainerBuilder $container,
        $id,
        $config,
        $userProvider,
        $defaultEntryPoint
    )
    {
        $providerId = 'security.authentication.provider.oauth2.'.$id;
        $container
            ->setDefinition($providerId, new DefinitionDecorator('oauth2.security.authentication.provider'))
            ->replaceArgument(0, new Reference($userProvider))
            ;

        $listenerId = 'security.authentication.listener.oauth2.'.$id;
        $listener = $container->setDefinition($listenerId, new DefinitionDecorator('oauth2.security.authentication.listener'));

        return array($providerId, $listenerId, $defaultEntryPoint);
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'oauth2.resource';
    }

    public function addConfiguration(NodeDefinition $node)
    {
    }


}
