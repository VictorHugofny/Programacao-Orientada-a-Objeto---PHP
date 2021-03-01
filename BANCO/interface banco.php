<?php
include_once("Contacorrente.class.php");
include_once("Contapoupanca.class.php");

echo " Interação Conta corrente: ";
echo " <b><br/> ";
$hugo = new Contacorrente();
$hugo->criar();
$hugo->consultarsaldototal();
$hugo->consultarlimite();
echo " Interação do Conta poupanca:  ";
echo " <b><br/>";
$victor = new Contapoupanca();
$victor->rendimento();
$victor->atualizarrendimentos();

?>