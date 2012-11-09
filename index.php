<?php
	define('ROOT', dirname(__FILE__).'/');
	
	include_once ROOT.'func.inc.php';
	include_once ROOT.'ui.config.php';
	include_once ROOT.'ui.php';
	include_once ROOT.'ds.inc.php';
	
	$ui = new ui();
	$ui -> set_meta($ui_meta_array);
	$ui -> render();
	
?>

