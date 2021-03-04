<?php
class Fabricante{
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}
class Produto{

private $descricao;   
private $preco;
private $fabricante;

public function __construct($descricao, $preco,Fabricante $fabricante){ //usada quando criar o objeto
$this->descricao = $descricao;
$this->preco = $preco;
$this->fabricante = $fabricante;
}

public function getDetalhes(){
return "O produto {$this->descricao} custa {$this->preco} reais, Fabricante {$this->fabricante}
";
    }
}

echo "<p>";
$f1 = new Fabricante(5);
$p1 = new Produto("livro",50,$f1); //criando um novo objeto da classe produto
//var_dump($p1);
echo $p1->getDetalhes();
