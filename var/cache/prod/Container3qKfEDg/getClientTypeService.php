<?php

namespace Container3qKfEDg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ClientType' shared autowired service.
     *
     * @return \App\Form\ClientType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ClientType'] = new \App\Form\ClientType();
    }
}
