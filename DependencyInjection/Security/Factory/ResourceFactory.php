<?php

/**
 * This file is part of the authbucket/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\DependencyInjection\Security\Factory;

use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\DefinitionDecorator;

class ResourceFactory implements SecurityFactoryInterface
{
    public function create(ContainerBuilder $container, $id, $config, $userProvider, $defaultEntryPoint)
    {
        $config =  array_merge(array(
            'resource_type' => 'model',
            'scope' => array(),
            'options' => array(),
        ), (array) $config);

        if ($config['resource_type'] === 'debug_endpoint') {
            $config['options'] = array_merge(array(
                'token_path' => '/oauth2/token',
                'debug_path' => '/oauth2/debug',
                'client_id' => '',
                'client_secret' => '',
                'cache' => true,
            ), $config['options']);
        }

        $providerId = 'security.authentication.provider.resource.' . $id;
        $container
            ->setDefinition($providerId, new DefinitionDecorator('security.authentication.provider.resource'))
            ->replaceArgument(3, $id)
            ->replaceArgument(4, $config['resource_type'])
            ->replaceArgument(5, $config['scope'])
            ->replaceArgument(6, $config['options']);

        $listenerId = 'security.authentication.listener.resource.' . $id;
        $container->setDefinition($listenerId, new DefinitionDecorator('security.authentication.listener.resource'))
            ->replaceArgument(2, $id);

        return array($providerId, $listenerId, $defaultEntryPoint);
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'oauth2-resource';
    }

    public function addConfiguration(NodeDefinition $node)
    {
        $node
            ->children()
                ->scalarNode('resource_type')->defaultValue('model')->end()
            ->end();

        $node
            ->children()
                ->arrayNode('scope')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        $node
            ->children()
                ->arrayNode('options')
                    ->useAttributeAsKey('key')
                    ->prototype('scalar')->end()
                ->end()
            ->end();
    }
}
