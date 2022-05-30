<?php

namespace ContainerAswVrae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_Generator_Instantiator_ExistingInstanceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.generator.instantiator.existing_instance' shared service.
     *
     * @return \Nelmio\Alice\Generator\Instantiator\ExistingInstanceInstantiator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ExistingInstanceInstantiator.php';

        return $container->privates['nelmio_alice.generator.instantiator.existing_instance'] = new \Nelmio\Alice\Generator\Instantiator\ExistingInstanceInstantiator(($container->privates['nelmio_alice.generator.instantiator.resolver'] ?? $container->load('getNelmioAlice_Generator_Instantiator_ResolverService')));
    }
}
