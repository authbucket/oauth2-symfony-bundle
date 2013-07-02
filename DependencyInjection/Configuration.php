<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\Oauth2Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('oauth2');

        $rootNode
            ->children()
                ->scalarNode('driver')->defaultValue('orm')->end()
                ->scalarNode('user_provider')->defaultNull()->end()
            ->end();

        $rootNode
            ->children()
                ->arrayNode('model')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        $rootNode
            ->children()
                ->arrayNode('response_handler')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        $rootNode
            ->children()
                ->arrayNode('grant_handler')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        $rootNode
            ->children()
                ->arrayNode('token_handler')
                    ->prototype('scalar')->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
