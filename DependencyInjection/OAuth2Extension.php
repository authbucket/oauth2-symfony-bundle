<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class OAuth2Extension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        if (in_array($config['driver'], array('orm'))) {
            $loader->load(sprintf('%s.yml', $config['driver']));
        }

        $loader->load('services.yml');

        $container->setParameter('oauth2.model', $config['model']);
        $container->setParameter('oauth2.response_handler', $config['response_handler']);
        $container->setParameter('oauth2.grant_handler', $config['grant_handler']);
        $container->setParameter('oauth2.token_handler', $config['token_handler']);

        if (!empty($config['user_provider'])) {
            $container->getDefinition('oauth2.token_controller')
                ->replaceArgument(6, new Reference($config['user_provider']));
        }
    }

    public function getAlias()
    {
        return 'oauth2';
    }
}
