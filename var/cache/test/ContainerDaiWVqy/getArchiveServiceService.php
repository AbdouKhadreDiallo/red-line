<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArchiveServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ArchiveService' shared autowired service.
     *
     * @return \App\Service\ArchiveService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ArchiveService.php';

        return $container->privates['App\\Service\\ArchiveService'] = new \App\Service\ArchiveService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['serializer'] ?? $container->getSerializerService()));
    }
}