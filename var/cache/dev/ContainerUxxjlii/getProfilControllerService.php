<?php

namespace ContainerUxxjlii;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProfilController' shared autowired service.
     *
     * @return \App\Controller\ProfilController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProfilController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ArchiveService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $b = ($container->services['serializer'] ?? $container->getSerializerService());

        $container->services['App\\Controller\\ProfilController'] = $instance = new \App\Controller\ProfilController(new \App\Service\ArchiveService($a, $b), $a, $b);

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProfilController', $container));

        return $instance;
    }
}
