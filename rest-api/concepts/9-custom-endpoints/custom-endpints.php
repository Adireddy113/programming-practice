<?php
/*
Plugin Name: Custom Rest API
Description: Here i am practicing custom rest api's
Version: 1.0
Author: Adireddy
Text Domain: custom-rest-apis
*/

defined('ABSPATH') or die ('no access');


add_action('rest_api_init','custom_hello');

function custom_hello() {
register_rest_route('custom/v1','/user/(?P<name>[a-z]+)/id/(?P<id>\d+)', [
'methods' => 'GET',
'callback' => 'custom_msg',
'permission_callback' => '__return_true' 
]);
}



function custom_msg($request) {
$name = $request->get_param('name');
$id = $request->get_param('id');

return ['Message' => "Welcome to Data Base $name",
       'ID' => $id,
       'Age' => 22,
       'Address'=> "Hyderabad"];
}