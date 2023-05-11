<?php

namespace ContainerBcfuvyy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_Messenger_MessageHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.messenger.message_handler' shared service.
     *
     * @return \Symfony\Component\Mailer\Messenger\MessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Messenger/MessageHandler.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['mailer.messenger.message_handler'])) {
            return $container->privates['mailer.messenger.message_handler'];
        }

        return $container->privates['mailer.messenger.message_handler'] = new \Symfony\Component\Mailer\Messenger\MessageHandler($a);
    }
}
