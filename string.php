<?php
//FUNÇOES COM STRING
$mensagem = "Boa noite serumaninhos";
echo "<br/>".strtolower($mensagem); //caixa baixa texto

$mensagem = "testando o teste ";
echo "<br/>".substr($mensagem,0,2)."correto"; // cprta

$mensagem = "boa noite serumaninhos";
echo "<br/>".strtoupper ($mensagem); // caixa alta texto

$mensagem = "Chavinho, voce mora em uma vila?";
echo "<br/>".$mensagem."".str_repeat("isso"."<br/>",5); // repete uma palavra

$mensagem = "Planeta terra";
echo "<br/>Comprimento da mensagem:".strlen($mensagem); // mostra o comprimeiro da string

$mensagem = "testando o teste "; // trocar palavra por outra
echo "<br/>";
echo str_replace("teste", "troca de palavra",$mensagem);


$mensagem = "planeja terra"; // mostrar a posição da palavra escolhida
echo "<br/> A posição da palavra terra é.".strpos($mensagem,"terra");


