<?php

class RequestAdapter{
    //$_GET
    private $header;
    private $action;
    // create|list host|service
    private $action_type;
    private $action_object;

    //output
    private $ret_html;

    public function __construct(){


        $this->header = $_GET['header']==''?'default':$_GET['header'];
        $this->action = $_GET['menu']==''?'default_default':$_GET['menu'];

        $this->recognise_action();
        $this->adapt();
    }
    private function recognise_action(){
        //header=object&menu=create_host_template
        if(preg_match('/^([^_]*)_(.*)/i',$this->action,$match)){
                $this->action_type = $match[1];
                $this->action_object = $match[2];
        }else{
        //?header=setting&menu=setting
                $this->action_type = $this->action;
        }

    }

    private function adapt(){
    
            $ad_file = CONTROL_ROOT.'/'.$this->header.'.php';
            if(file_exists($ad_file)){
                include_once $ad_file;
                ob_start();
                if($this->header == 'object' && $this->action_type == 'create'){
                    view_display_on_create($this->action_object);    
                }else{
                
                    $fun_name = $this->action;
                    $fun_name();
                }

                $this->ret_html = ob_get_clean();
            
            }else{
                $this->ret_html = "adapt file not exists";
            }
    }
    public function get_main_body_html(){
            if($this->ret_html === ''){
                $this->ret_html = 'hello world';
            }
            return $this->ret_html;
    }


}

?>
