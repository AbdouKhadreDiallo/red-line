<?php

namespace ContainerCcNPx8J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompetencesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CompetencesController' shared autowired service.
     *
     * @return \App\Controller\CompetencesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CompetencesController.php';

        $container->services['App\\Controller\\CompetencesController'] = $instance = new \App\Controller\CompetencesController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\CompetencesController', $container));

        return $instance;
    }
}
