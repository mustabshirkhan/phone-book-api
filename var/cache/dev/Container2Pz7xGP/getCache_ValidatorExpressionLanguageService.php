<?php

namespace Container2Pz7xGP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_ValidatorExpressionLanguageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.validator_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['cache.validator_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('sLZKJ2EhkW', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools/system'), ($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }
}
