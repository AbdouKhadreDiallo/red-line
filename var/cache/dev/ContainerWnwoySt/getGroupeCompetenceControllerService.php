<?php

namespace ContainerWnwoySt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeCompetenceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GroupeCompetenceController' shared autowired service.
     *
     * @return \App\Controller\GroupeCompetenceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GroupeCompetenceController.php';

        $container->services['App\\Controller\\GroupeCompetenceController'] = $instance = new \App\Controller\GroupeCompetenceController(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['serializer'] ?? $container->getSerializerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['validator'] ?? $container->getValidatorService()));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GroupeCompetenceController', $container));

        return $instance;
    }
}
