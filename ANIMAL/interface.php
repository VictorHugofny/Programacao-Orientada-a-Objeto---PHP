<?php
include_once("Leao.class.php");
include_once("Cavalo.class.php");

echo "<b> Interação do Leão </b> <br/>";
$simba = new Leao();
$simba->comer();
$simba->cacar();
echo "<b> Interação do Cavalo </b> <br/>";
$pedepano = new Cavalo();
$pedepano->comer();
$pedepano->fugir();
?>