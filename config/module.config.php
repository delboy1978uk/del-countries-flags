<?php

return array(
	'controllers' => array(
        'invokables' => array(
            'DelCountriesFlags\Controller\Flag' => 'DelCountriesFlags\Controller\FlagController',
        ),
    ),
   'view_manager' => array(
        'template_path_stack' => array(
            'delcountriesflags' => __DIR__ . '/../view',
        ),
    ),
	'service_manager' => array(
        'aliases' => array(
            'delcountriesflags_zend_db_adapter' => 'Zend\Db\Adapter\Adapter',
        ),
    ),
    
   'router' => array(
	     'routes' => array(
	        __NAMESPACE__ => array(
	            'type'    => 'segment',
	            'options' => array(
	                'route' => '/flag[/:size][/:country]',
	                'constraints' => array(
                        'size' => '[a-z][a-z]*',
                        'country'     => '[A-Z]*',
	                ),
	                'defaults' => array(
	                    'controller' => 'DelCountriesFlags\Controller\Flag',
	                    'action'     => 'index',
	                ),
	            ),
	        ),
	    ),
        
     )   
);
