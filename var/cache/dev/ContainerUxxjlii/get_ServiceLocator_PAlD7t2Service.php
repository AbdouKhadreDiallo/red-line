<?php

namespace ContainerUxxjlii;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PAlD7t2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pAlD7t2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pAlD7t2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CompetenceRepo' => ['privates', 'App\\Repository\\CompetencesRepository', 'getCompetencesRepositoryService', true],
            'competence_in_Repo' => ['privates', 'App\\Repository\\GroupeCompetenceRepository', 'getGroupeCompetenceRepositoryService', true],
        ], [
            'CompetenceRepo' => 'App\\Repository\\CompetencesRepository',
            'competence_in_Repo' => 'App\\Repository\\GroupeCompetenceRepository',
        ]);
    }
}