<?php
/*
Write a PHP class 'Rectangle' that has properties for length and width.
Implement methods to calculate the rectangle's area and perimeter.
*/

class Rectangle {
    public $length;
    public $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width  =$width;
    }
    
    public function area() {
        return $this->length * $this->width;
    }
    
    public function perimeter() {
        return 2 * ($this->length + $this->width);
    }
}

$myR = new Rectangle(10,10);
echo "Area: " . $myR->area() . "\n";
echo "Perimeter: " . $myR->perimeter() . "\n";




?>
