<?php

	define('ROOT',dirname(__FILE__).'/');
	define('WEB_PATH','/visual-nagios/');
	define('UI_ROOT',ROOT.'ui/');
	define('UI_STATIC',WEB_PATH.'ui/static/');
    define('CONTROL_ROOT',ROOT.'control/');


	$ui_meta_array = array(
		'object' =>array(
			'text'=>'Nagios object',
			'sub_menu' => array(
                'Host Template'    => array('create_host_template' => 'Create Host Template','list_host_template' =>'List All'),
				'Host'  =>array('create_host'=>'Create Host','list_host' => 'List All Host'),
				'Host Group'       =>array('create_host_group' => 'Create Group','list_host_group'=>'List All'),
               	'Command'          => array('list_command' => 'List All','create_command' => 'Create'),
                'service Template'    => array('create_service_template' => 'Create service Template','list_service_template' =>'List All'),
				'service'  =>array('create_service'=>'Create service','list_service' => 'List All service'),
				'service Group'       =>array('create_service_group' => 'Create Group','list_service_group'=>'List All'),
			),
		),
        'config' => array(
            'text' => 'Nagios Config',
            'sub_menu' => array(
                'nagios.cfg'        =>'',
                'resouces.cfg'      => '',
            ),
            
         ),
	);
    $config = array('app_name'=>'nagios_conf');

?>
