<?php
abstract class Conta {
    public $numero;
    public $saldo;

    public function __contruct($numero, $saldo_inicial){
        $this->numero = $numero;
        $this->saldo = $saldo_inicial;
    }
    function criar(){
        echo "Conta criada";
    }  
    function depositar($valor){
        if ($valor >=5000){
            echo "não é possivel fazer essa ação"
        }else{
            if($valor<0){
                echo "não é possivel valor negativo"
            }
            else{
                $this->$saldo += $valor;
                echo "depositado";
            }
        } 
    }  
    function sacar($valor){
        if ($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "dinheiro sacado";
        }
        else{
            echo "não possui saldo";
        }
        
    }  
    function consultarsaldo(){
        return $this->saldo;
        echo "cosulta saldo:";
    }  
    function obternumero(){
        return $this->numero;
        echo "numero obtido: <br/>";
    }  
}
?>