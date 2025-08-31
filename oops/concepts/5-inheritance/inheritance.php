<?php
/*
Plugin Name: Inheritance
Description: This plugin covers the working of inheritance in OOPS.
Version: 1.0
Author: Adireddy
Text Domain: inheritance
*/

defined('ABSPATH') or die ('no access from browser');

class Person {
public $name = "Adi";
public $age = 22;

public function introduce() {
return "He is $this->name and he was $this->age years old";
}
}

class Student extends Person {
public $rollnumber ="22J41A6756";

public function studentInfo() {
return "Roll Number: $this->rollnumber";
}

public function introduce() {
return "Hi i am a student. My name is $this->name and i am $this->age years old.";
}
}

function results() {
$myInfo = new Student();
$a=$myInfo->introduce();
$b=$myInfo->studentInfo();

return "$a<br>$b";
}

add_shortcode('inheritance','results');