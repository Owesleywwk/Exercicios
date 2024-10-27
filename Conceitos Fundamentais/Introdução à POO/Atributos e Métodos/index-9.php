<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function cumprimentar()
    {
        return "Olá!";
    }

}

$pessoa = new Pessoa();
echo $pessoa->cumprimentar();

?>