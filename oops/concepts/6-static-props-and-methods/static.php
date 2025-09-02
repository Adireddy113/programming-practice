<?php
/*
Plugin Name: Static
Description: This plugin shows how static methods and properties works.
Version: 1.0
Author: Adireddy
Text Domain: static
*/

defined('ABSPATH') or die ('no access from  browser');

class WebsiteTracker {
public static $totalVisitors=0;

public function __construct() {
self::$totalVisitors++;
}

public static function getVisitorCount() {
return "Total number of vists to site: ". self::$totalVisitors;
}
}

function results() {
$a=new WebsiteTracker;
$b=new WebsiteTracker;

return WebsiteTracker::getVisitorCount();
}

add_shortcode('static','results');