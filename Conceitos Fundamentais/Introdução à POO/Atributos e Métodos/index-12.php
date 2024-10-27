<?php

class Produto
{
    public $nome;
    public $preco;

    public function __construct($n, $p)
    {
        $this->nome = $n;
        $this->preco = $p;
    }
    public function calcularDesconto($d)
    {
        echo $this->nome . " com um desconto de $d% fica por apenas R$" . $this->preco - ($this->preco * ($d / 100));
    }

}
$produto = new Produto("Sabão em pó", 20);
$produto->calcularDesconto(30);

?>