<?php

class Produto {
    private $marca;
    private $valor;

    public function __construct($marca, $valor)
    {
        $this->marca = $marca;
        $this->valor = $valor;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getValor(){
        return $this->valor;
    }

}

class Funcionario {
    private $nome;
    private $idade;
    private $funcao;
    private $produto;

    public function __construct($nome, $idade, $funcao, Produto $produto){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->funcao = $funcao;
        $this->produto = $produto;
    }


    public  function getInfo(){
        if($this->idade < 18){
            return "é menor";
        } else {
            echo "é maior";
        }

        return "O funcionario $this->nome, tem a idade de $this->idade
                anos, função de $this->funcao, comprou o produto {$this->produto->getMarca()},
                de valor {$this->produto->getValor()}";
    }

}


$p1 = new Produto("Nestlé", 14.99);
$f1 = new Funcionario("Artur", 23, "Programador", $p1);
echo $f1->getInfo();
