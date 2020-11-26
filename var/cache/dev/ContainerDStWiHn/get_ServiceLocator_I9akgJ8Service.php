<?php

namespace ContainerDStWiHn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I9akgJ8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.I9akgJ8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.I9akgJ8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'groupe_competence_repo' => ['privates', 'App\\Repository\\GroupeCompetenceRepository', 'getGroupeCompetenceRepositoryService', true],
        ], [
            'groupe_competence_repo' => 'App\\Repository\\GroupeCompetenceRepository',
        ]);
    }
}
