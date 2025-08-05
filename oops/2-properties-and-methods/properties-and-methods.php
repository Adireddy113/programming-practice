<?php
/*
Plugin Name: Properties and Methods
Description: This is a simple plugin which shows usage of properties and methods.
Version:1.0
Author: Adireddy
Text Domain: properties-and-methods
*/

class Product {
public $name;
public $price;

public function productDetails() {
return "Name: $this->name<br>
Price: $this->price";
}

public function giveDiscount($discount) {
$giveDiscount=($this->price * $discount)/100;
$finalPrice=$this->price - $giveDiscount;
return "Final Price after discount of $discount% is: $finalPrice";
}
}

function callback() {
$p1=new Product();
$p1->name="Mobile";
$p1->price=45000;
$f1=$p1->productDetails();
$f2=$p1->giveDiscount(15);

return "$f1<br>$f2";
}

add_shortcode('prop_method','callback');