<?php

namespace Container8D7KTom;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleRangeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/ChainableFixtureDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/CollectionDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/SimpleCollectionDenormalizer.php';

        return $container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer(($container->privates['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.temporary_range'] ?? $container->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_TemporaryRangeService')));
    }
}
