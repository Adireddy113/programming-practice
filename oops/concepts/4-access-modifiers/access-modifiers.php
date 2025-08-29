<?php
/*
Plugin Name: Access Modifiers
Description: This plugin shows the importance and usage of Access Modifiers in OOPS.
Version: 1.0
Author: Adireddy
Text Domain: access-modifiers
*/

defined('ABSPATH') or die('no access');

class bankDetails {

public $holderName;
protected $balance;
private $pin;

public function __construct($holderName,$balance,$pin) {

$this->holderName=$holderName;
$this->balance=$balance;
$this->pin=$pin;
}

public function getDetails() {
return "Name: $this->holderName<br>
Balance: $this->balance<br>
Pin: $this->pin";
}
}

function callback() {

$k1=new bankDetails("Adi",5000,1234);

$a=$k1->getDetails();

return "$a";
}


add_shortcode('access_modifiers','callback');