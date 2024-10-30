<?php
if(!function_exists("add_new_subscriper")){
    function add_new_subscriper(){
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter';
    $state = $wpdb->insert($table_name, [
        'email'=>$_POST['email'],
        'status'=>'C'
    ]);
        if($state)
            echo json_encode(true);
        else
            echo json_encode(false);
        exit;
    }
    add_action("wp_ajax_add_new_subscriper","add_new_subscriper");
    add_action("wp_ajax_nopriv_add_new_subscriper","add_new_subscriper");
}