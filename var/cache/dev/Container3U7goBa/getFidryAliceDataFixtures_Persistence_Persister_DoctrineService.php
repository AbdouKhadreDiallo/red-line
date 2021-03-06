<?php

namespace Container3U7goBa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFidryAliceDataFixtures_Persistence_Persister_DoctrineService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.persister.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

        return $container->services['fidry_alice_data_fixtures.persistence.persister.doctrine'] = new \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
