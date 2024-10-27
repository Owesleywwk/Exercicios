<?php

class Funcionario
{
    public $nome;
    public $salario;

    public function __construct($n, $s)
    {
        $this->nome = $n;
        $this->salario = $s;
    }
    public function aumentarSalarario($p)
    {
        $aumento = $this->salario * ($p / 100);
        echo $this->nome . " recebeu um aumento de $p%, o seu novo salário é R$" . $this->salario += $aumento;
    }
}

$funcionario = new Funcionario("Keyllian", 1000);
$funcionario->aumentarSalarario(10);

?>