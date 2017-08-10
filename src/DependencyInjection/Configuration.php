<?php

/**
 * This file is part of the authbucket/oauth2-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\OAuth2Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('oauth2');

        $rootNode
            ->children()
                ->scalarNode('driver')->defaultNull()->end()
                ->scalarNode('user_provider')->defaultNull()->end()
                ->arrayNode('model')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('response_type_handler')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('grant_type_handler')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('token_type_handler')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('resource_type_handler')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('client_token_roles')
                    ->prototype('scalar')->end()
                ->end()
                ->arrayNode('resource_token_roles')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
