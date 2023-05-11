<?php

namespace ContainerBcfuvyy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_RetryStrategyLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.retry_strategy_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.retry_strategy_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async' => ['privates', 'messenger.retry.multiplier_retry_strategy.async', 'getMessenger_Retry_MultiplierRetryStrategy_AsyncService', true],
            'failed' => ['privates', 'messenger.retry.multiplier_retry_strategy.failed', 'getMessenger_Retry_MultiplierRetryStrategy_FailedService', true],
        ], [
            'async' => '?',
            'failed' => '?',
        ]);
    }
}
