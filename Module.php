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
    
	public function getServiceConfig()
    {
        return array
        (
            
            'factories' => array(
    
    			'delcountriesflags_mapper' => function ($sm) 
        		{
                    $mapper = new Mapper\Country();
                    $mapper->setDbAdapter($sm->get('zfcuser_zend_db_adapter'));
                    $entityClass = $options->getUserEntityClass();
                    $mapper->setEntityPrototype(new $entityClass);
                    $mapper->setHydrator(new Mapper\UserHydrator());
                    return $mapper;
                },
            ),
        );
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
*/
    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'del_countries_flags_service'              => 'DelCountriesFlags\Service\Country',
            ),
            'factories' => array(

                'del_countries_flags_module_options' => function ($sm) {
                    $config = $sm->get('Config');
                    return new Options\ModuleOptions(isset($config['del_countries_flags']) ? $config['del_countries_flags'] : array());
                },
               
                'del_countries_flags_country_hydrator' => function ($sm) {
                    $hydrator = new \Zend\Stdlib\Hydrator\ClassMethods();
                    return $hydrator;
                },

                'del_countries_flags_country_mapper' => function ($sm) {
                    $options = $sm->get('del_countries_flags_module_options');
                    $mapper = new Mapper\User();
                    $mapper->setDbAdapter($sm->get('del_countries_flags_zend_db_adapter'));
                    $entityClass = $options->getUserEntityClass();
                    $mapper->setEntityPrototype(new $entityClass);
                    $mapper->setHydrator(new Mapper\UserHydrator());
                    return $mapper;
                },
            ),
        );
    }
}
