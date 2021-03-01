<?php
include_once("Animal.class.php");
class Leao extends Animal{
    public $juba;

    function cacar(){
        echo "O Leão está caçando...<br/>";
    }
    function comer(){
        echo "nhac nhoc nhac! <br/>";
    }
}