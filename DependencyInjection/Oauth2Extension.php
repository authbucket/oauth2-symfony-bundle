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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class Oauth2Extension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        // Add response type handler.
        foreach ($config['response_handler'] as $type => $handler) {
            $container->get('oauth2.response_handler.factory')
                ->addResponseTypeHandler($type, $container->get($handler));
        }

        // Add grant type handler.
        foreach ($config['grant_handler'] as $type => $handler) {
            $container->get('oauth2.grant_handler.factory')
                ->addGrantTypeHandler($type, $container->get($handler));
        }

        // Addd token type handler.
        foreach ($config['token_handler'] as $type => $handler) {
            $container->get('oauth2.token_handler.factory')
                ->addTokenTypeHandler($type, $container->get($handler));
        }
    }
}
