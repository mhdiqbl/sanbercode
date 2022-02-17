<?php 
class Animal{
    public $name,
    $legs = 4,
    $cold_blooded = "no";

    public function __construct($name){
    $this->name = $name;
    }
}
?>