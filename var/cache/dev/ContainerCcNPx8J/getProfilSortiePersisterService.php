<?php

namespace ContainerCcNPx8J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilSortiePersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\ProfilSortiePersister' shared autowired service.
     *
     * @return \App\DataPersister\ProfilSortiePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/ProfilSortiePersister.php';

        return $container->privates['App\\DataPersister\\ProfilSortiePersister'] = new \App\DataPersister\ProfilSortiePersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}