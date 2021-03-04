<?php
//---- CLASSE MAE (SUPERCLASSE) ----
abstract class Automovel{
    public $cor;
    public $modelo;

    public function __construct($modelo, $cor){
    $this->modelo = $modelo;
    $this->cor = $cor;
    }

    public function seguro($seguro){
        if($seguro == true){
            $this->seguro = "POSSUI";
        }
        else{
            $this->seguro = "NÃO POSSUI";    }    
        }
    
    public function comprar(){
        echo "Parabens você comprou um {$this->modelo} de cor {$this->cor} situação {$this->seguro} seguro <br />";
    }
  
 abstract function dirigir();

 public static $tipo = 'Automovel';

    public static function tipo(){
        return self:: $tipo =" Bem vindo a loja ``AutoBem´´";
    }


}

//---- CLASSE FILHA (SUBCLASSE) ----
final class carro extends Automovel{
public $cinto;

    final function dirigir(){
        echo "Carro ligando";
}   
    final function segurança(){
        echo "Você esta colocando o Cinto <br />";
    }
}

//---- CLASSE FILHA (SUBCLASSE) ----
final class moto extends Automovel{
public $capacete;

    final function dirigir(){
        echo "Moto ligando";
}   
    final function segurança(){
         echo "Você esta colocando o Capacete <br />";
        }
}


//---- I N T E R F A C E ----
$Unomille = new carro("Gol","Preto");
echo carro::tipo();
echo "<br>";
$Unomille->seguro(true);
$Unomille->dirigir();
echo "<br>";
echo "<br>";
$Unomille->comprar();
echo "<br>";
$Unomille->segurança();
echo "<br>";
echo "<br>";

$moto1 = new moto("Pop100","azul");
echo moto::tipo(); 
echo "<br>";
$moto1->seguro(false);
$moto1->dirigir();
echo "<br>";
echo "<br>";
$moto1->comprar();
echo "<br>";
$moto1->segurança();
echo "<br>";
//chamando o static

echo "<br>";
//var_dump($Unomille);
?>

   