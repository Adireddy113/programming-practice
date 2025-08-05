<?php
/*
Plugin Name: Class and Objects
Description: Learning class and object creations.
Version: 1.0
Author: Adireddy
Text Domain: class-and-objects
*/

defined('ABSPATH') or die ('Not able to access from browser');

class Post {
public $title;
public $content;
public $author;

public function displayPost() {
return "Title: ".$this->title."<br>".
"Content: ".$this->content."<br>".
"Author: ".$this->author."<br><br>";
}
}

function callback() {
$mp=new Post();
$mp->title="My first Task";
$mp->content="i am very exicted to work with oops concepts like classes and objects";
$mp->author="Adireddy";
return $mp->displayPost();
}

add_shortcode('class_object','callback');


class Calculator {
public function add($a,$b) {
$result= $a+$b;
return "Sum of $a and $b = $result";
}
public function sub($a,$b) {
$result= $a-$b;
return "Subtarct of $a and $b is $result";
}
}

function call() {
$cal=new Calculator();
$sum=$cal->add(10,20);
$subtract=$cal->sub(20,10);
return "$sum<br>$subtract";
}

add_shortcode('calci','call');