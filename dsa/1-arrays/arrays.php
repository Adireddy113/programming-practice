<?php
/*
Plugin Name: Arrays
Description: This plugin is used to practice the DSA in PHP.
Version: 1.0
Author: Adireddy
Text Domain: arrays
*/

defined('ABSPATH') or die ('No Access');

class dsa {

public function fav() {
$movies = ["Athadu","Khaleja","Chalo","MCA","Bhahubali"];
$favM=[];
foreach($movies as $movie) {
$favM[] = $movie;
}
return implode(", ",$favM);
}


public function ass() {
$students = ["name"=>"Adi","age"=>22,"College"=>"MREC"];
$std=[];
foreach($students as $key=>$value) {
$std[] = "$key: $value";
}
return implode(", ", $std);
}


public function multi() {
$num1=[1,2,3];
$num2=[3,4,5,6];
$merge = [];
foreach($num1 as $num) {
$merge[] = $num;
}
foreach($num2 as $num) {
$merge[] = $num;
}

$unq=[];
foreach($merge as $m) {
$isdup=False;
foreach($unq as $u) {
if ($m==$u) {
$isdup=True;
break;
}
}
if(!$isdup) {
$unq[]=$m;
}

}
return implode(", ",$unq);
}


public function rev() {
$arr=[1,2,3,4,5];
$left=0;
$right=count($arr)-1;
while($left<$right) {
$temp=$arr[$left];
$arr[$left]=$arr[$right];
$arr[$right]=$temp;

$left+=1;
$right-=1;
}
return implode(", ",$arr);


}


public function cont() {
$abc=[1,2,3,4,4,3,5,6];
$bca=[];
foreach($abc as $num) {
if(isset($bca[$num])) {
$bca[$num]++;
}
else {
$bca[$num]=1;
}
}

$out=[];
foreach($bca as $key=>$value){
$out[]="$key: $value";
}

return implode(", ",$out);
}






}

function callback() {
$myM = new dsa();
$a=$myM->ass();
$b=$myM->fav();
$c=$myM->multi();
$d=$myM->rev();
$e=$myM->cont();
return "$a<br>$b<br>$c<br>$d<br>$e";
}

add_shortcode('array','callback');