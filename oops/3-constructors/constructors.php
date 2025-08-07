<?php
/*
Plugin Name: Constructor
Description: This plugin is created under learning process of constructor.
Version: 1.0
Author: Adireddy
Text Domain: constructor
*/

defined('ABSPATH') or die('u can not access this from browser');

class Product {
public $name;
public $price;

public function __construct($name,$price) {
$this->name=$name;
$this->price=$price;
}

public function showPrice() {
return "The price of $this->name is $this->price";
}
}

function callback() {

$p1=new Product("TV",50000);
$p2=new Product("Mobile",60000);

$a=$p1->showPrice();
$b=$p2->showPrice();

return "$a<br>$b";
}

add_shortcode('constructor','callback');