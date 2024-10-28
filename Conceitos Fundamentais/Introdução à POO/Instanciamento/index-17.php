<?php

class Funcionario
{
    public $nome;
    public $salario;

    public function __construct($nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}

$funcionario1 = new Funcionario("Avila", 1200);

$funcionario2 = new Funcionario("Keyllian", 1100);

$funcionario3 = new Funcionario("Max", 3000);

$funcionario4 = new Funcionario("Lucas", 1900);

$funcionario5 = new Funcionario("Pedro", 2400);

?>