<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_HttpCache_Purger_VarnishService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.http_cache.purger.varnish' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\VarnishPurger
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/HttpCache/PurgerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/HttpCache/VarnishPurger.php';

        return $container->privates['api_platform.http_cache.purger.varnish'] = new \ApiPlatform\Core\HttpCache\VarnishPurger([]);
    }
}
