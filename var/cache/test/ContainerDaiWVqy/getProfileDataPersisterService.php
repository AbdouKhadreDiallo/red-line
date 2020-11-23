<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileDataPersisterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\ProfileDataPersister' shared autowired service.
     *
     * @return \App\DataPersister\ProfileDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/ProfileDataPersister.php';

        return $container->privates['App\\DataPersister\\ProfileDataPersister'] = new \App\DataPersister\ProfileDataPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
