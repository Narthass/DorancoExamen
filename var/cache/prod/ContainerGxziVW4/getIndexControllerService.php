<?php

namespace ContainerGxziVW4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\IndexController' shared autowired service.
     *
     * @return \App\Controller\IndexController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\IndexController'] = $instance = new \App\Controller\IndexController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\IndexController', $container));

        return $instance;
    }
}
