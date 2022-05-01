<?php

namespace ContainerC3evx5D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdminProductController' shared autowired service.
     *
     * @return \App\Controller\AdminProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdminProductController.php';

        $container->services['App\\Controller\\AdminProductController'] = $instance = new \App\Controller\AdminProductController(($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AdminProductController', $container));

        return $instance;
    }
}
