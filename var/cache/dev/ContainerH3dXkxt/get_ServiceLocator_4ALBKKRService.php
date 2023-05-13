<?php

namespace ContainerH3dXkxt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4ALBKKRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4ALBKKR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4ALBKKR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PlayerController::buyPlayer' => ['privates', '.service_locator.O_hwiRj', 'get_ServiceLocator_OHwiRjService', true],
            'App\\Controller\\PlayerController::index' => ['privates', '.service_locator.aubrZzb', 'get_ServiceLocator_AubrZzbService', true],
            'App\\Controller\\PlayerController::sellPlayer' => ['privates', '.service_locator.uH1DCB3', 'get_ServiceLocator_UH1DCB3Service', true],
            'App\\Controller\\TeamController::buyPlayer' => ['privates', '.service_locator.2Igu30a', 'get_ServiceLocator_2Igu30aService', true],
            'App\\Controller\\TeamController::index' => ['privates', '.service_locator.nAmwTrk', 'get_ServiceLocator_NAmwTrkService', true],
            'App\\Controller\\TeamController::new' => ['privates', '.service_locator.nAmwTrk', 'get_ServiceLocator_NAmwTrkService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\PlayerController:buyPlayer' => ['privates', '.service_locator.O_hwiRj', 'get_ServiceLocator_OHwiRjService', true],
            'App\\Controller\\PlayerController:index' => ['privates', '.service_locator.aubrZzb', 'get_ServiceLocator_AubrZzbService', true],
            'App\\Controller\\PlayerController:sellPlayer' => ['privates', '.service_locator.uH1DCB3', 'get_ServiceLocator_UH1DCB3Service', true],
            'App\\Controller\\TeamController:buyPlayer' => ['privates', '.service_locator.2Igu30a', 'get_ServiceLocator_2Igu30aService', true],
            'App\\Controller\\TeamController:index' => ['privates', '.service_locator.nAmwTrk', 'get_ServiceLocator_NAmwTrkService', true],
            'App\\Controller\\TeamController:new' => ['privates', '.service_locator.nAmwTrk', 'get_ServiceLocator_NAmwTrkService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\PlayerController::buyPlayer' => '?',
            'App\\Controller\\PlayerController::index' => '?',
            'App\\Controller\\PlayerController::sellPlayer' => '?',
            'App\\Controller\\TeamController::buyPlayer' => '?',
            'App\\Controller\\TeamController::index' => '?',
            'App\\Controller\\TeamController::new' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\PlayerController:buyPlayer' => '?',
            'App\\Controller\\PlayerController:index' => '?',
            'App\\Controller\\PlayerController:sellPlayer' => '?',
            'App\\Controller\\TeamController:buyPlayer' => '?',
            'App\\Controller\\TeamController:index' => '?',
            'App\\Controller\\TeamController:new' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
