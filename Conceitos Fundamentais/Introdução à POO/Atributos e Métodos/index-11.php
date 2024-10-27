<?php

class Calculadora
{
    public $valor1;
    public $valor2;

    public function somar($v1, $v2)
    {
        echo $v1 + $v2 ."<br>";
    }
    public function subtrair($v1, $v2)
    {
        echo $v1 - $v2 ."<br>";
    }
    public function multiplicar($v1, $v2)
    {
        echo $v1 * $v2 ."<br>";
    }

    public function dividir($v1, $v2)
    {
        echo $v1 / $v2 ."<br>";
    }

}

$questao1 = new Calculadora();
$questao1->somar(5, 5);
$questao2 = new Calculadora();
$questao2->subtrair(5, 5);
$questao3 = new Calculadora();
$questao3->multiplicar(5, 5);
$questao4 = new Calculadora();
$questao4->dividir(5, 5);

?>