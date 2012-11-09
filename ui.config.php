<?php

	define('ROOT',dirname(__FILE__).'/');
	define('WEB_PATH','/visual-nagios/');
	define('UI_ROOT',ROOT.'ui/');
	define('UI_STATIC',WEB_PATH.'ui/static/');


	$ui_meta_array = array(
		'object' =>array(
			'text'=>'Nagios object',
			'sub_menu' => array(
				'host'=>array('text'=>'Host','sub_menu'=>array('Create','List')),
				'host_group'=>array('text'=>'Host_group','sub_menu'=>array('Create','Update')),
				'service'=>'',
				'contract'=>'',
                		'command' => '',
                		'timerange'=>'',
			),
		),
        'config' => array(
            'text' => 'ÅäÖÃ',
            'sub_menu' => array(
                'nagios.cfg'=>'',
                'resouces.cfg' => '',
            ),
            
         ),
		'about' => array(
			'text' => 'about',
			'left_menu' => array(
				'version'=>'',
				'contra' =>'',
			),	
		),
	);
    $config = array('app_name'=>'nagios_conf');

?>
