<?php

class Animal
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

class Cachorro extends Animal
{
    public function latir()
    {
        echo $this->getNome() . " está latindo!";
    }
}

$rex = new Cachorro(nome: "Boby", idade: 2);
$rex->latir();

?>