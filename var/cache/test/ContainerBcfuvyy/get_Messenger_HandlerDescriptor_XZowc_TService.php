<?php

namespace ContainerBcfuvyy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XZowc_TService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.XZowc.T' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.XZowc.T'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['texter.messenger.sms_handler'] ?? $container->load('getTexter_Messenger_SmsHandlerService')), []);
    }
}
