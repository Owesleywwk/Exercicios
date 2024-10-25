<?php

class Produto
{
    public $nome;
    public $preco;
}

$produto1 = new Produto();
$produto1->preco = 18;
$produto2 = new Produto();
$produto2->preco = 4;
$produto3 = new Produto();
$produto3->preco = 8;
echo $valorTotal = $produto1->preco + $produto2->preco + $produto3->preco;

?>