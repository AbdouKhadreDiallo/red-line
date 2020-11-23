<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompetencePersisterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\CompetencePersister' shared autowired service.
     *
     * @return \App\DataPersister\CompetencePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/CompetencePersister.php';

        return $container->privates['App\\DataPersister\\CompetencePersister'] = new \App\DataPersister\CompetencePersister(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['serializer'] ?? $container->getSerializerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['validator'] ?? $container->getValidatorService()));
    }
}
