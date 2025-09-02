<?php
/*
Write a PHP interface called 'Resizable' with a method 'resize()'.
Implement the 'Resizable' interface in a class called 'Square' and
add functionality to resize the square.
*/

interface Resizable {
    public function resize($percentage);
}


class Square implements Resizable {
    public $side;
    
    public function __construct($side) {
        $this->side = $side;
    }
    
    public function resize($percentage) {
        $this->side = $this->side * ($percentage / 100);
    }
    
    public function getArea() {
        return pow($this->side, 2);
    }
    
    public function getSide() {
        return $this->side;
    }
}


$square = new Square(10);
echo "Initial length: " . $square->getSide() . "\n";

$square->resize(60);
echo "Resized Length: " . $square->getSide() . "\n";

echo "Area: " . $square->getArea() . "\n";



?>
