<?php

namespace ContainerPUQe0r1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zowp2srService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zowp2sr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zowp2sr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repoHomeSlider' => ['privates', 'App\\Repository\\HomeSliderRepository', 'getHomeSliderRepositoryService', true],
        ], [
            'entityManager' => '?',
            'repoHomeSlider' => 'App\\Repository\\HomeSliderRepository',
        ]);
    }
}
