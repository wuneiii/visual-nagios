<?php
	define('ROOT', dirname(__FILE__).'/');
	
	if($_GET['header'] == ''){
		$_GET['header'] = 'object';
	}
	include_once ROOT.'ui.config.php';//ui meta info
    include_once ROOT.'def.inc.php';// define
    include_once ROOT.'model.inc.php'; // globle $model
    include_once ROOT.'html.inc.php'; // CLASS HTML Factory
	include_once ROOT.'func.inc.php'; 
    include_once ROOT.'ra.inc.php';// request adapter  CLASS RequestAdapter
	include_once ROOT.'ui.inc.php'; // ui driver class CLASS UI
	include_once ROOT.'ds.inc.php'; // data source
	

	$ui = new UI();
	$ui -> set_meta($ui_meta_array);
	$ui -> render();
	
?>

