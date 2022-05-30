<?php

namespace Container8D7KTom;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_MetadataDriver_YamlService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'vich_uploader.metadata_driver.yaml' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\Driver\YamlDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/AbstractYamlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/YamlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';

        return $container->privates['vich_uploader.metadata_driver.yaml'] = new \Vich\UploaderBundle\Metadata\Driver\YamlDriver(($container->privates['vich_uploader.metadata.file_locator'] ?? ($container->privates['vich_uploader.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))));
    }
}
