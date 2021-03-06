<?php

namespace Liilo\MangopayBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class LiiloMangopayExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('liilo_mangopay_service.client_id',        $config['client_id']);
        $container->setParameter('liilo_mangopay_service.client_password',  $config['client_password']);
        $container->setParameter('liilo_mangopay_service.temp_folder',      $config['temp_folder']);
        $container->setParameter('liilo_mangopay_service.prod',             $config['prod']);
        
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('parameters.yml');
        $loader->load('services.yml');
    }
}
