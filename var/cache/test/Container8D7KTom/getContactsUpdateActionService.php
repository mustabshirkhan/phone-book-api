<?php

namespace Container8D7KTom;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactsUpdateActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\ContactsUpdateAction' shared autowired service.
     *
     * @return \App\Controller\ContactsUpdateAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/ContactsUpdateAction.php';

        return $container->services['App\\Controller\\ContactsUpdateAction'] = new \App\Controller\ContactsUpdateAction();
    }
}
