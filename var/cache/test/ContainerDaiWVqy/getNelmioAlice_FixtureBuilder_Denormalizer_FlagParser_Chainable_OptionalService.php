<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_Chainable_OptionalService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/ChainableFlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/OptionalFlagParser.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.flag_parser.chainable.optional'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParser();
    }
}
