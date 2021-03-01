<?php
$contadorm = 0;
$contadorf = 0;
$sexo = array ("masculino", "feminino","masculino", "feminino","masculino", "feminino","masculino", "feminino","masculino", "feminino");

foreach ($sexo as $teste){

    if ($teste == "masculino"){
        $contadorm ++;
    }
    else{
        $contadorf ++;
    }
}
echo "Masculino Quantidade" ;
echo "<li> $contadorm </li>";
echo "Feminino Quantidade" ;
echo "<li> $contadorf </li>";
?>