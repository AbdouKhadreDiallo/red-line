<?php

namespace ContainerMIw9EYm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Config_LoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.config.login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $container->privates['security.firewall.map.config.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('login', 'security.user_checker', '.security.request_matcher.HeUdK73', true, false, 'security.user.provider.concrete.app_user_provider', 'login', NULL, NULL, NULL, [0 => 'json_login', 1 => 'anonymous'], NULL);
    }
}