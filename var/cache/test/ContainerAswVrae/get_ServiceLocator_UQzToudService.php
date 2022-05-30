<?php

namespace ContainerAswVrae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UQzToudService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.UQzToud' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UQzToud'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contact' => ['privates', '.errored..service_locator.UQzToud.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.UQzToud": it references class "App\\Entity\\Contact" but no such service exists.'],
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', false],
        ], [
            'contact' => 'App\\Entity\\Contact',
            'fileUploader' => 'App\\Service\\FileUploader',
        ]);
    }
}
