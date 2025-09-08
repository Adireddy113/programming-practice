<?php
/*
Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'.
Implement a method to display the vehicle details.
*/


class Vehicle {
    
    public $brand;
    public $model;
    public $year;
    
    public function __construct($brand,$model,$year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    
    
    public function details() {
        echo "Brand:" . $this->brand . "\n";
        echo "Model:" . $this->model . "\n";
        echo "Year:" . $this->year . "\n";
        
    }
}


$myV = new Vehicle("BMW","S22",2004);
$myV->details();








?>
