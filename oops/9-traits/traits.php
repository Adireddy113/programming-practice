<?php
/*
Plugin Name: Traits
Description: This plugin used to describe the use of traits.
Version: 1.0
Author: Adireddy
Text Domain: traits
*/

defined('ABSPATH') or die ('No Access');

trait LoggerTrait {
public function log($message) {
echo "[LOG]: $message <br>";
}
}

class Question {
use LoggerTrait; 
public function addQuestion($question) {
$this->log("Question added: $question");
}
}

class User {
use LoggerTrait; 
public function addUser($username) {
$this->log("User added: $username");
}
}

function callback() {
$q = new Question();
$a = $q->addQuestion("What is PHP OOP?");

$u = new User();
$b = $u->addUser("JohnDoe");

return "$a<br>$b";
}

add_shortcode('traits','callback');