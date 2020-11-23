<?php

namespace ContainerMIw9EYm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_FixtureSet_SimpleService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.fixture_set.simple' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\FixtureSet\SimpleFixtureSetResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/FixtureSetResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/FixtureSet/SimpleFixtureSetResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/FixtureBagResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Fixture/TemplateFixtureBagResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.fixture_set.simple'] = new \Nelmio\Alice\Generator\Resolver\FixtureSet\SimpleFixtureSetResolver(($container->privates['nelmio_alice.generator.resolver.parameter_bag.remove_conflicting_parameters'] ?? $container->load('getNelmioAlice_Generator_Resolver_ParameterBag_RemoveConflictingParametersService')), ($container->privates['nelmio_alice.generator.resolver.fixture_bag.template_bag'] ?? ($container->privates['nelmio_alice.generator.resolver.fixture_bag.template_bag'] = new \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver())));
    }
}
