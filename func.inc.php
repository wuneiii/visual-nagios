<?php


function nagios_parse_hostgroup_members($members){

	$tmp = explode(',',$members);
	return $tmp;



}
function url($header = '',$menu = '',$action = ''){
	$retu = WEB_PATH;
	if($header != ''){
		$ret .= '?header='.$header;
	}
	if($menu != ''){

		$ret .= '&menu='.$menu;
	}
	if($action != ''){
		$ret .= '&action='.$action;
	}
	return $ret;

}
function C($key){

    global $config;
    return $config[$key];

}
function M($model_name){
    global $model;
    return $model[$model_name];

}
?>
