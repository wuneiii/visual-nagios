<?php

    $model['host_template'] = array(
            'name' => array('note'=>'name','type'=>VN_STRING,'default'=>''),
            'notifications_enabled' => array('note'=>'notifications_enabled','type'=>VN_BOOL,'default'=>''),
            'event_handler_enabled' => array('note'=>'event_handler_enabled','type'=>VN_BOOL,'default'=>''),
            'flap_detection_enabled' => array('note'=>'flap_detection_enabled','type'=>VN_BOOL,'default'=>''),
            'failure_prediction_enabled' => array('note'=>'failure_prediction_enabled','type'=>VN_BOOL,'default'=>''),
            'process_perf_data' => array('note'=>'process_perf_data','type'=>VN_BOOL,'default'=>''),
            'retain_status_information' => array('note'=>'retain_status_information','type'=>VN_BOOL,'default'=>''),
            'retain_nonstatus_information' => array('note'=>'retain_nonstatus_information','type'=>VN_BOOL,'default'=>''),
            'notification_period' => array('note'=>'notification_period','type'=>VN_TIME_RANGE,'default'=>''),
            'register' => array('note'=>'register','type'=>VN_CONSTANT,'default'=>0),
            );
    $model['host'] = array(
            'host_name'     => array('note'=>'host_name','type'=>VN_STRING,'default'=>''),
            'alias'         => array('note'=>'alias','type'=>VN_STRING,'default'=>''),
            'address'       => array('note'=>'address','type'=>VN_IP,'default'=>''),
            'display_name'  => array('note'=>'display_name','type'=>VN_STRING,'default'=>''),
            'use'           => array('note'=>'use','type'=>VN_HOST_TEMPLATE,'default'=>''),
            );
    $model['command'] = array(
            'command_name'  => array('type'=>VN_STRING,'note'=>''),
            'command_line'  => array('type'=>VN_STRING,'note'=>''),
            
            
            );
    




?>
