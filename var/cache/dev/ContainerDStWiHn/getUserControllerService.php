<?php

namespace ContainerDStWiHn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UserController' shared autowired service.
     *
     * @return \App\Controller\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UserController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/UploadAvatarService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/AddUserService.php';

        $a = new \App\Service\UploadAvatarService();
        $b = ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'));
        $c = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $d = ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService'));
        $e = ($container->services['serializer'] ?? $container->getSerializerService());
        $f = ($container->services['validator'] ?? $container->getValidatorService());

        $container->services['App\\Controller\\UserController'] = $instance = new \App\Controller\UserController($a, new \App\Service\AddUserService($b, $c, $d, $e, $a, $f), ($container->privates['App\\Repository\\ApprenantRepository'] ?? $container->load('getApprenantRepositoryService')), $d, $e, $b, $c, $f);

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\UserController', $container));

        return $instance;
    }
}
