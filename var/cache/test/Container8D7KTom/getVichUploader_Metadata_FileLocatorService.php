<?php

namespace Container8D7KTom;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Metadata_FileLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'vich_uploader.metadata.file_locator' shared service.
     *
     * @return \Metadata\Driver\FileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';

        return $container->privates['vich_uploader.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]);
    }
}
