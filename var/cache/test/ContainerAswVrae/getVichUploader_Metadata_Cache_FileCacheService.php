<?php

namespace ContainerAswVrae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Metadata_Cache_FileCacheService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'vich_uploader.metadata.cache.file_cache' shared service.
     *
     * @return \Metadata\Cache\FileCache
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/ClearableCacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';

        return $container->privates['vich_uploader.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($container->targetDir.''.'/vich_uploader'));
    }
}
