<?php

namespace ContainerGxziVW4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceContratService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\ServiceContrat' shared autowired service.
     *
     * @return \App\Service\ServiceContrat
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\ServiceContrat'] = new \App\Service\ServiceContrat(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}