<?php

namespace ContainerUCJJSDr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KcdejufService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kcdejuf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kcdejuf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CompetenceRepo' => ['privates', 'App\\Repository\\CompetencesRepository', 'getCompetencesRepositoryService', true],
        ], [
            'CompetenceRepo' => 'App\\Repository\\CompetencesRepository',
        ]);
    }
}
