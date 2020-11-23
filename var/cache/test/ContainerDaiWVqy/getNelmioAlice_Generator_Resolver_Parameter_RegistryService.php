<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_Parameter_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.parameter.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/ParameterResolverRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ChainableParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/StaticParameterResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/ArrayParameterResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.parameter.registry'] = new \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry([0 => ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.static_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver())), 1 => ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.array_parameter_resolver'] = new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\ArrayParameterResolver())), 2 => ($container->privates['nelmio_alice.generator.resolver.parameter.chainable.recursive_parameter_resolver'] ?? $container->load('getNelmioAlice_Generator_Resolver_Parameter_Chainable_RecursiveParameterResolverService'))]);
    }
}
