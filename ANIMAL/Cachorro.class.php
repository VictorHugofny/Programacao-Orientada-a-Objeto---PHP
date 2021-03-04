<?php
include_once("Animal.class.php");

class Cachorro extends Animal {
    public $nome; // atributo
    public $idade;
    public $raca;
    public $sexo;
    public $porte;

    __construct ($porte){
        $this->porte = $porte;
    }

    function latir(){ //metodos
        return "au au au";
    }
    function dormir (){
        return "Zzzzz Zzzzz Zzzz";
    }
    function comer (){
        return "croc croc croc";
    }
    function correr(){
        return "tra tra tra"; 
    }
}
?>
