<?php

namespace Liilo\MangopayBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 * 
 * @package Liilo\MangopayBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('liilo_mangopay');

        $rootNode
            ->children()
                ->scalarNode('client_id')->cannotBeEmpty()->isRequired()->end()
                ->scalarNode('client_password')->cannotBeEmpty()->isRequired()->end()
                ->scalarNode('temp_folder')->cannotBeEmpty()->isRequired()->end()
                ->booleanNode('prod')->defaultValue(false)->end()
        ;

        return $treeBuilder;
    }
}
