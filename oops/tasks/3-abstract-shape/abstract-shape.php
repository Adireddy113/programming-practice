<?php
/*
Write a PHP class called 'Shape' with an abstract method 'calculateArea()'.
Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
*/

abstract class Shape {
    
    abstract public function calculateArea();
}

    class Triangle extends Shape {
        
        public $length;
        public $base;
        
        public function __construct($length,$base) {
            $this->length = $length;
            $this->base = $base;
        }
        
        public function calculateArea() {
            return 0.5 * ($this->length * $this->base);
        }
}


 class Rectangle extends Shape {
        
        public $length;
        public $base;
        
        public function __construct($length,$base) {
            $this->length = $length;
            $this->base = $base;
        }
        
        public function calculateArea() {
            return  $this->length * $this->base;
        }
}

$myT = new Triangle(10,20);
echo "Area of Trinagle: " . $myT->calculateArea() . "\n";

$myR = new Rectangle(10,20);
echo "Area of Rectangle: " . $myR->calculateArea() . "\n";

?>
