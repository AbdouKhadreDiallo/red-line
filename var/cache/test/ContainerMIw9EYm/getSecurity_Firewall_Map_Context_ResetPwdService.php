<?php

namespace ContainerMIw9EYm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_ResetPwdService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.reset_pwd' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';

        return $container->privates['security.firewall.map.context.reset_pwd'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->load('getSecurity_ContextListener_0Service'));
            yield 2 => ($container->privates['security.authentication.listener.anonymous.reset_pwd'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_ResetPwdService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), ($container->privates['security.exception_listener.reset_pwd'] ?? $container->load('getSecurity_ExceptionListener_ResetPwdService')), NULL, ($container->privates['security.firewall.map.config.reset_pwd'] ?? $container->load('getSecurity_Firewall_Map_Config_ResetPwdService')));
    }
}
