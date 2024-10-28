<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function apresentar($apresentador, $apresentado)
    {
        echo "Meu nome é " . $this->nome . ". " . $apresentador->nome . " essa é o " . $apresentado->nome . " e ele tem " . $apresentado->idade . " anos";
    }
}

$pessoa1 = new Pessoa("Keyllian", 18);
$pessoa2 = new Pessoa("Lucas", 20);
$pessoa3 = new Pessoa("Max", 42);
$pessoa1->apresentar($pessoa2, $pessoa3);

?>