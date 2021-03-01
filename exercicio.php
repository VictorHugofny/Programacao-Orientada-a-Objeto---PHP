<?php
$listatelefonica = array ("74 9 9999-9999", "87 9 9999-9999", "75 9 9155 9999", "87 9 8888-8888","71 9 9155 9999","73 9 9155 9999","81 9 9155 9999","87 9 9155 9999");
$contadorbahia = 0;
$contadorpernambuco = 0;
foreach ($listatelefonica as $teste){
    
    if (substr($teste,0,2) == "74" || substr($teste,0,2) == "75"|| substr($teste,0,2) == "71" || substr($teste,0,2) == "73"){
        $contadorbahia ++;
    }
    if (substr($teste,0,2) == "87" || substr($teste,0,2) == "81"){
        $contadorpernambuco ++;
    }
}
echo "<br/>Quantidade de Baianos: ";
echo $contadorbahia;
echo "<br/>Quantidade de Pernambucanos: ";
echo $contadorpernambuco;