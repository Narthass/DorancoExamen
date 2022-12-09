<?php

namespace ContainerEqbbFDx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I0bGDgRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i0bGDgR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i0bGDgR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serviceContrat' => ['privates', 'App\\Service\\ServiceContrat', 'getServiceContratService', true],
        ], [
            'serviceContrat' => 'App\\Service\\ServiceContrat',
        ]);
    }
}