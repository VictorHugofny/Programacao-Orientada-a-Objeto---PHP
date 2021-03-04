<?php
//---- CLASSE MAE (SUPERCLASSE) ----
abstract class Mamiferos{
    protected $nome;
    protected $idade;
    protected $mamas;
    protected $cor_dos_olhos;

    public function __construct($nome, $idade,$mamas,$cor_dos_olhos){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->mamas = $mamas;
    $this->cor_dos_olhos = $cor_dos_olhos;
    echo "---- Mamifero CRIADO -----<br>";
    }

    public function aleitar(){
      echo "esta amamentando";
        }
    
    public function comunicar(){
        echo "O mamifero esta comunicando";
    }
}

//---- CLASSE FILHA (SUBCLASSE) ----
final class Homem extends Mamiferos{
    public $casado;

    final function rir(){
        echo "hahahahahaha (ser humano rindo)";
          }
    final function falar(){
        echo "Ola bom dia! (ser humano falando)";
          }}

//---- CLASSE FILHA (SUBCLASSE) ----          
final class Cao extends Mamiferos{
    public $cauda;
        
    final function morder(){
        echo "Grrr nhac Grrr nhac!! (cachorro mordendo)";
             }
    final function latir(){
        echo "Au-au! (cachorro latindo)";
             }}

//---- CLASSE FILHA (SUBCLASSE) ----
final class Gato extends Mamiferos{
    public $cauda;
        
    final function arranhar(){
        echo "stik stik !! (Gato arranhando)";
             }
    final function miar(){
        echo "Miauu!  (Gato miando)";
             }}

//--------- I N T E R F A C E -------------
$homem1 = new Homem("Maria",30,true,"castanho");
$homem1->aleitar();
echo "<br>";
$homem1->rir();
echo "<br>";
$homem1->falar();
echo "<br>";

$cachorro1 = new Cao("Max",5,true,"Preto");
$cachorro1->aleitar();
echo "<br>";
$cachorro1->morder();
echo "<br>";
$cachorro1->latir();
echo "<br>";

$gato1 = new Gato("Mingau",7,true,"azul");
$gato1->aleitar();
echo "<br>";
$gato1->arranhar();
echo "<br>";
$gato1->miar();
echo "<br>";
// -----------------------------------------
?>