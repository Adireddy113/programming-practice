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
register_rest_route('custom/v1','/first', [
'methods' => 'GET',
'callback' => 'custom_msg',
'permission_callback' => '__return_true' 
]);
}



function custom_msg() {
return ['message' => 'Hello World'];
}