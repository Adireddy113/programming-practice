<?php
/*
Plugin Name: Interfaces
Description: This plugin is created to learn interfaces.
Version: 1.0
Author: Adireddy
Text Domain: interfaces
*/

defined('ABSPATH') or die('no access');


interface Plugin {
public function activate();
}

interface Theme {
public function deactivate();
}

class a implements Plugin,Theme {
public function activate() {
return "The plugin is activated";
}
public function deactivate() {
return "The plugin is deactivated";
}
}

class b implements Plugin {
public function activate() {
return "The plugins are activated";
}
}

function callback() {
$p1=new a();
$p2=new b();

$output = '';
$output .=$p1->activate() ."<br>";
$output .=$p1->deactivate() ."<br>";
$output .=$p2->activate();

return $output;
}

add_shortcode('interface','callback');