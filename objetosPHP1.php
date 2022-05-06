<?php

class Produto {
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco){
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getDetalhes(){
        return "O produto $this->descricao custa $this->preco reais";
    }

}

$p1 = new Produto('Livro', 50);
$p1 -> setDescricao('Livro');
$p1 -> setPreco(50);
var_dump($p1);
//echo $p1->getDetalhes();
