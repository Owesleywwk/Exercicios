<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($n, $i)
    {
        $this->nome = $n;
        $this->idade = $i;
    }

    public function comparar($comparar)
    {
        if ($comparar->idade != $this->idade) {
            echo $this->idade > $comparar->idade ? $this->nome : $comparar->nome;
        } else {
            echo $this->nome . " e " . $comparar->nome . " possuem a mesma idade, " . $this->idade;
        }
    }

}

$pessoa1 = new Pessoa("Max", 42);
$pessoa2 = new Pessoa("Keyllian", 18);
$pessoa1->comparar($pessoa2);
?>