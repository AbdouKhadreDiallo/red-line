<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Resolver_Value_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.resolver.value.registry' shared service.
     *
     * @return \Nelmio\Alice\Generator\Resolver\Value\ValueResolverRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGeneratorAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ValueResolverRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ChainableValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ArrayValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/DynamicArrayValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/EvaluatedValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixtureMethodCallReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixtureWildcardReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ListValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/OptionalValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ParameterValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ValueForCurrentValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/VariableValueResolver.php';

        return $container->privates['nelmio_alice.generator.resolver.value.registry'] = new \Nelmio\Alice\Generator\Resolver\Value\ValueResolverRegistry([0 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.array_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.array_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ArrayValueResolver())), 1 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.dynamic_array_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\DynamicArrayValueResolver())), 2 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\EvaluatedValueResolver())), 3 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.function_argument_resolver'] ?? $container->load('getNelmioAlice_Generator_Resolver_Value_Chainable_FunctionArgumentResolverService')), 4 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.fixture_property_reference_resolver'] ?? $container->load('getNelmioAlice_Generator_Resolver_Value_Chainable_FixturePropertyReferenceResolverService')), 5 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.fixture_method_call_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureMethodCallReferenceResolver())), 6 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.unresolved_fixture_reference_resolver'] ?? $container->load('getNelmioAlice_Generator_Resolver_Value_Chainable_UnresolvedFixtureReferenceResolverService')), 7 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.fixture_wildcard_reference_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureWildcardReferenceResolver())), 8 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.list_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.list_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ListValueResolver())), 9 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.optional_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.optional_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\OptionalValueResolver())), 10 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.parameter_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ParameterValueResolver())), 11 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.unique_value_resolver'] ?? $container->load('getNelmioAlice_Generator_Resolver_Value_Chainable_UniqueValueResolverService')), 12 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.value_for_current_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ValueForCurrentValueResolver())), 13 => ($container->privates['nelmio_alice.generator.resolver.value.chainable.variable_value_resolver'] ?? ($container->privates['nelmio_alice.generator.resolver.value.chainable.variable_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\VariableValueResolver()))]);
    }
}
