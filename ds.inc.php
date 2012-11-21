<?php


    class DS{
    
        private $all_object_data;
        private $all_config;

        public function __construct(){
            global $nagios;
            $this->all_object_data = $nagios;
        
        }
        public function get_all_object($type = ''){
            if($type == ''){
                return $this->all_object_data;
            }
            return $this->all_object_data[$type];
        
        }
    
    
    }
$CFG_DIR = '/home/serving/nagios/etc/objects/';
$CFG_LIST = array();
$CFG_DATA = array();

nagios_scan_cfg_dir();

foreach($CFG_LIST as $cfg_file){
	nagios_parse_cfg_file($CFG_DIR.$cfg_file);
}
$nagios = $CFG_DATA;

function nagios_parse_cfg_file($file){
	$content = file_get_contents($file);
	$ret = preg_match_all('/define\s+(\w*){([^}]*)}/m',$content,$matchs);
	if($ret === false){
		return false;
	}
	global $CFG_DATA;
	
	foreach($matchs[1] as $i => $key){
		$_got_it_kv = nagios_parse_kv_from_string($matchs[2][$i]);
		switch ($key){

			case 'host':
				$CFG_DATA['host'][$_got_it_kv['host_name']] = $_got_it_kv;
				break;
			case 'service':
				
				$CFG_DATA['service'][$_got_it_kv['service_description']] = $_got_it_kv;
				break;
			case 'hostgroup':
				$CFG_DATA['hostgroup'][$_got_it_kv['hostgroup_name']] =$_got_it_kv;
				break;
			case 'contact':
				$CFG_DATA['contact'][$_got_it_kv['contact_name']] = $_got_it_kv;
				break;
			case 'contactgroup':
				$CFG_DATA['contactgroup'][$_got_it_kv['contactgroup_name']] = $_got_it_kv;
				break;
			case 'command':
				$CFG_DATA['command'][$_got_it_kv['command_name']] = $_got_it_kv;
				break;
			case 'timeperiod':
				$CFG_DATA['timeperiod'][$_got_it_kv['timeperiod_name']] = $_got_it_kv;
				break;
			default:
			break;
			

		}
	}
}


function nagios_parse_kv_from_string($content){
	//preg_match_all('/^\s*([\w]*)\s*([\w\.\-\(\)\/,!\s]*)(;.*)?$/m',$content,$matchs);
	preg_match_all('/^\s*([\w]*)\s*([^;\n]*)/m',$content,$matchs);

	foreach($matchs[1] as $k => $value){

		$_ret[$value] = $matchs[2][$k];
	}
	return $_ret;
	exit;

}

function nagios_scan_cfg_dir(){

	global $CFG_DIR,$CFG_LIST;	
	if(!file_exists($CFG_DIR)){
		die('file not exists '.$CFG_DIR);
	}
	$fd = opendir($CFG_DIR);
	while($file = readdir($fd)){
		if($file == '.' || $file == '..'){
			continue;
		}
		if(false !== preg_match('/cfg$/',$file)){
			$CFG_LIST[] = $file;
		}

	}
}

?>
