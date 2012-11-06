<?php
return array(
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
            'delcountriesflags' => array(
                'type' => 'Literal',
                'priority' => 1000,
                'options' => array(
                    'route' => '/flag/:size/:country',
                    'defaults' => array(
                        'controller' => 'flag',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
     )   
);
