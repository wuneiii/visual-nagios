<?php


function nagios_parse_hostgroup_members($members){

	$tmp = explode(',',$members);
	return $tmp;



}
function url($header = '',$menu = ''){
	$retu = WEB_PATH;
	if($header != ''){
		$ret .= '?header='.$header;
	}
	if($menu != ''){

		$ret .= '&menu='.$menu;
	}
	return $ret;
}
function C($key){

    global $config;
    return $config[$key];

}
?>
