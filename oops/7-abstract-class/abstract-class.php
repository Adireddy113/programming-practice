<?php
/*
Plugin Name: Abstract Class
Description: This plugin is used to showcase the learning of Abstract Class in OOPS.
Version: 1.0
Author: Adireddy
Text Domain: abstract-class
*/

defined('ABSPATH') or die ('No access');

abstract class Vehicle {
abstract public function startEngine();

public function fuelType() {
return "The fuel type is: Petrol <br>";
}
}

class Car extends Vehicle {
public $brand="BMW";

public function startEngine() {
return $this->brand . " is just starts with a key<br>";

}
}

class Bike extends Vehicle {
public $brand="Honda";

public function startEngine() {
return $this->brand . " is just starts with auto switch<br>";
}
}

function callback() {

$result = "";

$myCar=new Car();
$result .=$myCar->startEngine();
$result .=$myCar->fuelType();

$myBike=new Bike();
$result .=$myBike->startEngine();
$result .=$myBike->fuelType();

return $result;
}

add_shortcode('abstract','callback');