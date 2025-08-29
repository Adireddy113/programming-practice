<?php
/*
Write a PHP class called 'Circle' that has a radius property. 
Implement methods to calculate the circle's area and circumference.
*/

class Circle {
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * pow($this->radius,2);
    }
    
    public function circumference() {
        return 2 * pi() * $this->radius;
    }
}


$myC = [ new Circle(10),
 new Circle(20)
];

foreach($myC as $c) {
echo "Area: " . $c->area() . "\n";
echo "Circumference: " . $c->circumference() . "\n\n";
}





?>
