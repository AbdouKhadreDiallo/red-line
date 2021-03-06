<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFidryAliceDataFixtures_Loader_DoctrineService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'fidry_alice_data_fixtures.loader.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\PurgerLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PurgerLoader.php';

        return $container->services['fidry_alice_data_fixtures.loader.doctrine'] = new \Fidry\AliceDataFixtures\Loader\PurgerLoader(($container->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] ?? $container->load('getFidryAliceDataFixtures_Doctrine_PersisterLoaderService')), ($container->services['fidry_alice_data_fixtures.persistence.purger_factory.doctrine'] ?? $container->load('getFidryAliceDataFixtures_Persistence_PurgerFactory_DoctrineService')), 'delete', ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
