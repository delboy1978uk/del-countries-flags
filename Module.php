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
    


   public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'delCountriesFlagsName' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\DelCountriesFlagsName;
                    $template = $locator->get('delcountriesflags_module_options')->getCountryNameViewTemplate();
                    $viewHelper->setViewTemplate($template);
                    return $viewHelper;
                },
                'delCountriesFlagsFlag' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\DelCountriesFlagsFlag;
                    $viewHelper->setViewTemplate($locator->get('delcountriesflags_module_options')->getCountryFlagViewTemplate());
                    return $viewHelper;
                },
                'delCountriesFlagsSelectDropdown' => function ($sm) {
                    $locator = $sm->getServiceLocator();
                    $viewHelper = new View\Helper\DelCountriesFlagsSelectDropdown();
                    $viewHelper->setViewTemplate($locator->get('delcountriesflags_module_options')->getCountrySelectDropdownViewTemplate());
                    return $viewHelper;
                }
            ),
        );

    }

    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'delcountriesflags_service'              => 'DelCountriesFlags\Service\Country',
        		'DelCountriesFlags\Form\Element\Select'   => 'DelCountriesFlags\Form\Element\Select',
            ),
            'factories' => array(

                'delcountriesflags_module_options' => function ($sm) 
            	{
                    $config = $sm->get('Config');
                    //die(print_r($config['delcountriesflags']));
                    return new Options\ModuleOptions(isset($config['delcountriesflags']) ? $config['delcountriesflags'] : array());
                },
               
                'delcountriesflags_mapper' => function ($sm) 
                {
                    $options = $sm->get('delcountriesflags_module_options');
                    $mapper = new Mapper\Country();
                    $mapper->setDbAdapter($sm->get('delcountriesflags_zend_db_adapter'));
                    $entityClass = $options->getCountryEntityClass();
                    $mapper->setEntityPrototype(new $entityClass);
                    $mapper->setHydrator(new Mapper\CountryHydrator());
                    return $mapper;
                },
                'delcountriesflags_hydrator' => function ($sm) 
                {
                    $hydrator = new \Zend\Stdlib\Hydrator\ClassMethods();
                    return $hydrator;
                },
            ),
        );
    }
}
