<?php

namespace ContainerDaiWVqy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Json_LoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.json.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordJsonAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $container->privates['security.authentication.listener.json.login'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'login', ($container->privates['security.authentication.success_handler.login.json_login'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Login_JsonLoginService')), ($container->privates['security.authentication.failure_handler.login.json_login'] ?? $container->load('getSecurity_Authentication_FailureHandler_Login_JsonLoginService')), ['check_path' => '/api/login', 'username_path' => 'email', 'password_path' => 'password', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login'], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));

        $instance->setSessionAuthenticationStrategy(($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $instance;
    }
}
