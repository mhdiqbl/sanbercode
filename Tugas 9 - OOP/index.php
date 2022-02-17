<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep =new animal("shaun");
echo "Animals name : " .$sheep->name."<br>";
echo "legs : ". $sheep->legs."<br>";
echo "cold blood : ".$sheep->cold_blooded. "<br><br>";

$kodok =new frog("kodok");
echo "Animals name : " .$kodok->name."<br>";
echo "legs : ". $kodok->legs."<br>";
echo "cold blood : ".$kodok->cold_blooded."<br>";
echo "jump : ";
$kodok->jump();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Animals name : " .$sungokong->name."<br>";
echo "legs : ". $sungokong->legs."<br>";
echo "cold blood : ".$sungokong->cold_blooded."<br>";
echo "jump : ";
$sungokong->yell() ;

?>