<?php
include_once("Conta.class.php");
class Contacorrente extends Conta {
    private $limite ;
    private $limite_disponivel;

    public function __contruct($numero,$saldo_inicial,$limite_inicial){
        parent:: __contruct ($numero,$saldo_inicial);
        $this->limite = $limite_inicial;
    }


    function consultarsaldo(){
        parent::consultarsaldo() + $this->limite;
    }  
    function sacar($valor){
        if ($this->consultarsaldo >= $valor){ // saldo + limite >= saque
            if ($this->consultarsaldo() >= $valor) { // saldo >= saque
                parent::sacar($valor) ;
            }else{
            $resto = $valor - parent::consultarsaldo();
            $this->limite_disponivel -= $resto;
            parent::sacar($parent::consultarsaldo()); //zeramos o saldo real
            $this->limite_disponivel -=$falta; //subtrair limite disponivel
            }
        }
                    }
        
    function depositar($valor){
        parent::depositar();

    }
    function consultarlimite(){
        return $this->limite;
        echo "<b>consulta limite: <br/>";
    }  
    function alterarlimite($novo_limite){
        $this->limite = $novo_limite;
        echo "<b>alterando limite:  <br/>";
    }  
}
?>