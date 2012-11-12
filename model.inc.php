<?php

    $model['host'] = array(
            'name' => array('desc'=>'name','type'=>NGS_STRING,'default'=>''),
            'notifications_enabled' => array('desc'=>'notifications_enabled','type'=>NGS_BOOL,'default'=>''),
            'event_handler_enabled' => array('desc'=>'event_handler_enabled','type'=>NGS_BOOL,'default'=>''),
            'flap_detection_enabled' => array('desc'=>'flap_detection_enabled','type'=>NGS_BOOL,'default'=>''),
            'failure_prediction_enabled' => array('desc'=>'failure_prediction_enabled','type'=>NGS_BOOL,'default'=>''),
            'process_perf_data' => array('desc'=>'process_perf_data','type'=>NGS_BOOL,'default'=>''),
            'retain_status_information' => array('desc'=>'retain_status_information','type'=>NGS_BOOL,'default'=>''),
            'retain_nonstatus_information' => array('desc'=>'retain_nonstatus_information','type'=>NGS_BOOL,'default'=>''),
            'notification_period' => array('desc'=>'notification_period','type'=>NGS_TIME_RANGE,'default'=>''),
            'register' => array('desc'=>'register','type'=>NGS_BOOL,'default'=>''),
            'use' => array('desc'=>'','type'=>'','default'=>''),
            'host_name' => array('')

            );




?>
