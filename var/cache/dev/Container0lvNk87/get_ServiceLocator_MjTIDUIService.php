<?php

namespace Container0lvNk87;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MjTIDUIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MjTIDUI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MjTIDUI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stage' => ['privates', '.errored..service_locator.MjTIDUI.App\\Entity\\Stage', NULL, 'Cannot autowire service ".service_locator.MjTIDUI": it needs an instance of "App\\Entity\\Stage" but this type has been excluded in "config/services.yaml".'],
        ], [
            'stage' => 'App\\Entity\\Stage',
        ]);
    }
}
