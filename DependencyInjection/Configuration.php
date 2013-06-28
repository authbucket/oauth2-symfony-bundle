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
            ->addDefaultsIfNotSet()
            ->children()
                ->arrayNode('response_handler')
                    ->children()
                        ->scalarNode('code')->defaultValue('oauth2.response_handler.code')->end()
                        ->scalarNode('token')->defaultValue('oauth2.response_handler.token')->end()
                    ->end()
                ->end()
            ->end();

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->arrayNode('grant_handler')
                    ->children()
                        ->scalarNode('authorization_code')->defaultValue('oauth2.grant_handler.authorization_code')->end()
                        ->scalarNode('client_credentials')->defaultValue('oauth2.grant_handler.client_credentials')->end()
#                        ->scalarNode('password')->defaultValue('oauth2.grant_handler.password')->end()
                        ->scalarNode('refresh_token')->defaultValue('oauth2.grant_handler.refresh_token')->end()
                    ->end()
                ->end()
            ->end();

        $rootNode
            ->addDefaultsIfNotSet()
            ->children()
                ->arrayNode('token_handler')
                    ->children()
                        ->scalarNode('bearer')->defaultValue('oauth2.token_handler.bearer')->end()
                        ->scalarNode('mac')->defaultValue('oauth2.token_handler.mac')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
