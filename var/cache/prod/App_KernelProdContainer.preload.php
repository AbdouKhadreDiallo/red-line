<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerHDTQbXx/App_KernelProdContainer.php';
require __DIR__.'/ContainerHDTQbXx/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerHDTQbXx/getValidator_ExpressionService.php';
require __DIR__.'/ContainerHDTQbXx/getValidator_EmailService.php';
require __DIR__.'/ContainerHDTQbXx/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerHDTQbXx/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerHDTQbXx/getTwigService.php';
require __DIR__.'/ContainerHDTQbXx/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerHDTQbXx/getSessionService.php';
require __DIR__.'/ContainerHDTQbXx/getServicesResetterService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_PasswordEncoderService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerHDTQbXx/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerHDTQbXx/getSecrets_VaultService.php';
require __DIR__.'/ContainerHDTQbXx/getRouting_LoaderService.php';
require __DIR__.'/ContainerHDTQbXx/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerHDTQbXx/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerHDTQbXx/getFilesystemService.php';
require __DIR__.'/ContainerHDTQbXx/getErrorControllerService.php';
require __DIR__.'/ContainerHDTQbXx/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerHDTQbXx/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerHDTQbXx/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerHDTQbXx/getContainer_GetenvService.php';
require __DIR__.'/ContainerHDTQbXx/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerHDTQbXx/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerHDTQbXx/getCacheClearerService.php';
require __DIR__.'/ContainerHDTQbXx/getCache_SystemClearerService.php';
require __DIR__.'/ContainerHDTQbXx/getCache_SystemService.php';
require __DIR__.'/ContainerHDTQbXx/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerHDTQbXx/getCache_AppClearerService.php';
require __DIR__.'/ContainerHDTQbXx/getCache_AppService.php';
require __DIR__.'/ContainerHDTQbXx/getCache_AnnotationsService.php';
require __DIR__.'/ContainerHDTQbXx/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Swagger_Action_UiService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Listener_View_WriteService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Listener_View_ValidateService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Listener_View_SerializeService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Listener_View_RespondService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Listener_Exception_ValidationService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Listener_ExceptionService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Jsonld_Action_ContextService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_QueryExtension_OrderService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Doctrine_Orm_DataPersisterService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Action_PlaceholderService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Action_NotFoundService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Action_ExceptionService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Action_EntrypointService.php';
require __DIR__.'/ContainerHDTQbXx/getApiPlatform_Action_DocumentationService.php';
require __DIR__.'/ContainerHDTQbXx/getAnnotations_CacheService.php';
require __DIR__.'/ContainerHDTQbXx/getTemplateControllerService.php';
require __DIR__.'/ContainerHDTQbXx/getRedirectControllerService.php';
require __DIR__.'/ContainerHDTQbXx/get_ServiceLocator_Beq5mCoService.php';
require __DIR__.'/ContainerHDTQbXx/get_ServiceLocator_C9JCBPCService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\ApiPlatformBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'ApiPlatform\Core\Documentation\Action\DocumentationAction';
$classes[] = 'ApiPlatform\Core\Action\EntrypointAction';
$classes[] = 'ApiPlatform\Core\Action\ExceptionAction';
$classes[] = 'ApiPlatform\Core\Action\NotFoundAction';
$classes[] = 'ApiPlatform\Core\Action\PlaceholderAction';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension';
$classes[] = 'ApiPlatform\Core\DataProvider\Pagination';
$classes[] = 'ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener';
$classes[] = 'ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\JsonSchema\SchemaFactory';
$classes[] = 'ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener';
$classes[] = 'ApiPlatform\Core\Identifier\IdentifierConverter';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer';
$classes[] = 'ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer';
$classes[] = 'ApiPlatform\Core\Api\CachedIdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Api\IdentifiersExtractor';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainItemDataProvider';
$classes[] = 'ApiPlatform\Core\JsonSchema\TypeFactory';
$classes[] = 'ApiPlatform\Core\JsonLd\Action\ContextAction';
$classes[] = 'ApiPlatform\Core\JsonLd\ContextBuilder';
$classes[] = 'ApiPlatform\Core\EventListener\ExceptionListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener';
$classes[] = 'ApiPlatform\Core\EventListener\AddFormatListener';
$classes[] = 'Negotiation\Negotiator';
$classes[] = 'ApiPlatform\Core\EventListener\DeserializeListener';
$classes[] = 'ApiPlatform\Core\EventListener\ReadListener';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainCollectionDataProvider';
$classes[] = 'ApiPlatform\Core\EventListener\RespondListener';
$classes[] = 'ApiPlatform\Core\EventListener\SerializeListener';
$classes[] = 'ApiPlatform\Core\Validator\EventListener\ValidateListener';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Validator';
$classes[] = 'ApiPlatform\Core\Filter\QueryParameterValidateListener';
$classes[] = 'ApiPlatform\Core\EventListener\WriteListener';
$classes[] = 'ApiPlatform\Core\DataPersister\ChainDataPersister';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\XmlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Extractor\YamlExtractor';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory';
$classes[] = 'ApiPlatform\Core\PathResolver\CustomOperationPathResolver';
$classes[] = 'ApiPlatform\Core\PathResolver\OperationPathResolver';
$classes[] = 'ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator';
$classes[] = 'ApiPlatform\Core\Api\ResourceClassResolver';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\Router';
$classes[] = 'ApiPlatform\Core\Security\EventListener\DenyAccessListener';
$classes[] = 'ApiPlatform\Core\Security\ResourceAccessChecker';
$classes[] = 'ApiPlatform\Core\Serializer\SerializerFilterContextBuilder';
$classes[] = 'ApiPlatform\Core\Serializer\SerializerContextBuilder';
$classes[] = 'ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider';
$classes[] = 'ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer';
$classes[] = 'ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer';
$classes[] = 'ApiPlatform\Core\Problem\Serializer\ErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer';
$classes[] = 'ApiPlatform\Core\Serializer\ItemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer';
$classes[] = 'ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'ApiPlatform\Core\JsonLd\Serializer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'ApiPlatform\Core\Serializer\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';

Preloader::preload($classes);
require_once __DIR__.'/twig/57/57f74199a760833d65d727bd870f1794f563a92a4a69f071b924b2f96f535eb3.php';
require_once __DIR__.'/twig/0d/0d027731be91785daba636527ec5bf8cccb2059795d93a2bcd37c070d008ab7b.php';
require_once __DIR__.'/twig/da/da3cefa4351855f6472fcf727dc7a09b3b2f07d087a387e7483da0d23a7d3401.php';
require_once __DIR__.'/twig/3d/3dfb8d655a14a2b11af37788e5c5aa591ce4946ea81612f5e1cd7e2985d1b238.php';
require_once __DIR__.'/twig/3e/3e688145be4bdb7fee40a81e9841bfb7f6219f05f19668f95dc14cb8f9c7a78b.php';
require_once __DIR__.'/twig/ab/ab3cf252444b9dcbaae143ea9872c5f908729601de66fb1a0b6e902a5aacc119.php';
require_once __DIR__.'/twig/22/223e47212eb3ee092f9a1d75636e951e61b7d4b188994d523125d764c677f018.php';
require_once __DIR__.'/twig/b2/b296804055a5f1fb1b4f8222a9bfd409e87416baf33382f409e6bc7e49c8f805.php';
require_once __DIR__.'/twig/35/358554b92ca28bdceb7e541de25b55b3594c6939dfba38d84db57b2d944526cd.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
Preloader::preload($classes);