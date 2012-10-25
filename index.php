

<?php
	
	$page = $_GET['page'];

	include_once 'template.header.php';


	include_once 'func.inc.php';
	include_once 'ds.inc.php';
	
	$data = $nagios[$page];	
	if($_GET['db'] == 1)print_r($data);
		
	$cnt = 0;
	include_once 'template.'.$page.'.php';
?>

