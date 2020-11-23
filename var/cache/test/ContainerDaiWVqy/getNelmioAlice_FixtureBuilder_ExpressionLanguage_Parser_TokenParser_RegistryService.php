<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_RegistryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\TokenParserRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/TokenParserRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/ChainableTokenParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/AbstractChainableParserAwareParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/DynamicArrayTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/EscapedValueTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FixtureListReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FixtureMethodReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FixtureRangeReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/MethodReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/OptionalTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/ParameterTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/PropertyReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/VariableReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/SimpleReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/StringArrayTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/VariableTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/WildcardReferenceTokenParser.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\TokenParserRegistry([0 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.dynamic_array_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\DynamicArrayTokenParser())), 1 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.escaped_value_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\EscapedValueTokenParser())), 2 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_list_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureListReferenceTokenParser())), 3 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_method_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureMethodReferenceTokenParser())), 4 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.fixture_range_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureRangeReferenceTokenParser())), 5 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.method_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\MethodReferenceTokenParser())), 6 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.optional_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\OptionalTokenParser())), 7 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.parameter_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ParameterTokenParser())), 8 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.property_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\PropertyReferenceTokenParser())), 9 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableReferenceTokenParser())), 10 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.simple_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\SimpleReferenceTokenParser())), 11 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_array_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringArrayTokenParser())), 12 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_StringTokenParserService')), 13 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.tolerant_function_token_parser'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_Chainable_TolerantFunctionTokenParserService')), 14 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.variable_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableTokenParser())), 15 => ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser'] ?? ($container->privates['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.wildcard_reference_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\WildcardReferenceTokenParser()))]);
    }
}
