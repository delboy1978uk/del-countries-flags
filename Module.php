<?php

namespace DelCountriesFlags;

class Module 
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig($env = null)
    {
        return include __DIR__ . '/config/module.config.php';
    }

   /* public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'delCountriesFlagsName' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\delCountriesFlagsName;
                    return $viewHelper;
                },
                'delCountriesFlagsFlag' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\delCountriesFlagsFlag;
                    return $viewHelper;
                }
            ),
        );

    }

    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'del_countries_flags_service'              => 'DelCountriesFlags\Service\CountriesFlags',
            ));
    }*/
}
