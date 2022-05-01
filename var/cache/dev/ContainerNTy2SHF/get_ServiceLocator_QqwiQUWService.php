<?php

namespace ContainerNTy2SHF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QqwiQUWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qqwiQUW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qqwiQUW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminProductController::delete' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\AdminProductController::edit' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\CartController::index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.IrXwkls', 'get_ServiceLocator_IrXwklsService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminProductController:delete' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\AdminProductController:edit' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\CartController:index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.IrXwkls', 'get_ServiceLocator_IrXwklsService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.4u5os03', 'get_ServiceLocator_4u5os03Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminProductController::delete' => '?',
            'App\\Controller\\AdminProductController::edit' => '?',
            'App\\Controller\\CartController::index' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminProductController:delete' => '?',
            'App\\Controller\\AdminProductController:edit' => '?',
            'App\\Controller\\CartController:index' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
