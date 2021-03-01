<?php
include_once("Animal.class.php");
class Cavalo extends Animal {
    public $raca;

    function fugir(){
        echo "O cavalo esta fugindo... <br/>";
    }
}
?>