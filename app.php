<?php
include_once("Cachorro.class.php")
$scooby = new Cachorro('medio');

$scooby->nome="Scooby-Doo";
$Scooby->idade=7;
$Scooby->raca="Dogue Alemão"
$Scooby->sexo="M";

echo $scooby->correr()."<br/>";
echo $scooby->comer()."<br/>";
echo $scooby->dormir()."<br/>";

echo "Olá, meu nome é".$scooby->nome.
",tenho".$scooby->idade.
"anos e sou de raça".$scooby->raca;

?>


