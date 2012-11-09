<?php

	define('ROOT',dirname(__FILE__).'/');
	define('WEB_PATH','/visual-nagios/');
	define('UI_ROOT',ROOT.'ui/');
	define('UI_STATIC',WEB_PATH.'ui/static/');


	$ui_meta_array = array(
		'nagios_object' =>array(
			'text'=>'nagios object',
			'left_menu' => array(
				'host'=>'',
				'host_group'=>'',
				'service'=>'',
				'contract'=>'',
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
