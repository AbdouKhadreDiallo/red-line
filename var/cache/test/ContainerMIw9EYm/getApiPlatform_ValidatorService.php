<?php

namespace ContainerMIw9EYm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_ValidatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.validator' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Validator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Validator.php';

        return $container->privates['api_platform.validator'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Validator(($container->services['validator'] ?? $container->getValidatorService()), $container);
    }
}
