<?php

namespace ContainerXu1EW2T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Middleware_DispatchAfterCurrentBusService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.middleware.dispatch_after_current_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/DispatchAfterCurrentBusMiddleware.php';

        return $container->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware();
    }
}
