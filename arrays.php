<?php
const carro = "fusca";
$listaNomes = array ("UM " => "hugo","DOIS" => "teste","TRES" => "cafe");
$listaNomes["DOIS"] ="Maria";
print ("<pre>");
print_r ($listaNomes);
print ("</pre>");

$listaTelefones = array();
$listaTelefones[0] = "(77) 9174 6116";
$listaTelefones[1] = "(77) 9174 6116";
$listaTelefones[2] = "(77) 9174 6116";

$dadosPessoais = array ("testando 1", "testando 2", "testando 3");

echo "<h1> Lista de Nomes </h1>";
echo "<ul>";
    foreach ($dadosPessoais as $nome){
        echo "<li> $nome </li>";
    }


?>