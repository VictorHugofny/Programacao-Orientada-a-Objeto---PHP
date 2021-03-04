<?php
abstract class Conta{
    protected $agencia;
    protected $saldo;
    protected $conta;

    public function __construct($agencia,$saldo,$conta){
        $this-> = $agencia;
        $this->saldo = $saldo;
        $this->conta = $conta;
    }

    public function getDetalhes(){
        return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br/>";
    }
    public function depositar($valor){
        $this->saldo += $valor;
        echo "Deposito de: {$valor} | Saldo atual: {$this->saldo} <br />";

    }
}

final class Poupanca extends Conta{
    public function saque($valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo} <br/>";
        }
        else{
            echo "Saque não autorizado | Saldo Atual: {$this->saldo} <br/>";
        }
    }
}

final class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia,$saldo,$conta, $limite){
      parent::__construct($agencia,$conta,$saldo);
      $this -> limite = $limite;
    }

    public function saque($valor){
        if(($this->saldo + $this->limite) >= $valor){
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo} <br/>";
        }
        else{
            echo "Saque não autorizado de {$valor} | Saldo Atual: {$this->saldo} <br/> | Limite: {$this->limite}<br/>";
        }
    } 
}
$c1 = new Corrente(100,5000,2586, 500);
$c1 -> depositar(1800);
$c1 ->saque(2500);
$c1 ->saque(2000);
$c1 ->saque(2000);


echo $c1->getDetalhes();