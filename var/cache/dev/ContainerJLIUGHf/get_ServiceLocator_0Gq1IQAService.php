<?php

namespace ContainerJLIUGHf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0Gq1IQAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0Gq1IQA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0Gq1IQA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ContactsController::__invoke' => ['privates', '.service_locator.s1gaPNB', 'get_ServiceLocator_S1gaPNBService', true],
            'App\\Controller\\ContactsUpdateAction::__invoke' => ['privates', '.service_locator.UQzToud', 'get_ServiceLocator_UQzToudService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\ContactsController:__invoke' => ['privates', '.service_locator.s1gaPNB', 'get_ServiceLocator_S1gaPNBService', true],
            'App\\Controller\\ContactsController' => ['privates', '.service_locator.s1gaPNB', 'get_ServiceLocator_S1gaPNBService', true],
            'App\\Controller\\ContactsUpdateAction:__invoke' => ['privates', '.service_locator.UQzToud', 'get_ServiceLocator_UQzToudService', true],
            'App\\Controller\\ContactsUpdateAction' => ['privates', '.service_locator.UQzToud', 'get_ServiceLocator_UQzToudService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\ContactsController::__invoke' => '?',
            'App\\Controller\\ContactsUpdateAction::__invoke' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ContactsController:__invoke' => '?',
            'App\\Controller\\ContactsController' => '?',
            'App\\Controller\\ContactsUpdateAction:__invoke' => '?',
            'App\\Controller\\ContactsUpdateAction' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
