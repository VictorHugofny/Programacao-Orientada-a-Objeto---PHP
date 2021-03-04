<?php
abstract class Automovel{
    public $cor;
    public $nrodas;
    public $modelo;
    public $seguro;

    public function comprar($pagamento){
        echo "Parabens você recebeu um {$this->modelo} de cor {$this->cor} situação do seguro {$ths->seguro} <br />";
}
    public function segurança($segurança){
        echo "Você esta colocando os itens de segurança <br />";
    }
    public function testedrive($testar){
        echo "Você esta dando uma volta com o automovel {$this->modelo} de cor {$this->cor} situação do seguro {$ths->seguro} <br />";
        }
 abstract function dirigir();


}
final class carro extends Automovel{
public $cinto;

    final function dirigir(){
        echo "Carro ligando";
}   
    final function segurança($segurança){
        echo "Você esta colocando o Cinto <br />";
    }
}

final class moto extends Automovel{
public $capacete;

    final function dirigir(){
        echo "Carro ligando";
}   
    final function segurança($segurança){
         echo "Você esta colocando o Capacete <br />";
        }
}


$Unomille = new carro;
$Unomille->cor ="azul";
$Unomille->modelo = "Uno mille";
$Unomille->seguro = false;
$Unomille->dirigir();
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($Unomille);
?>

   