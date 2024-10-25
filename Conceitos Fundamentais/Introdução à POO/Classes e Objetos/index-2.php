<?php

class Carro
{
    public $marca;
    public $modelo;
}

$carro1 = new Carro();
$carro1->marca = "Gol";
$carro1->modelo = "Turbo";
var_dump(value: $carro1);

echo "<br>";

$carro1->marca = "Fiat";
$carro1->modelo = "Uno";
var_dump($carro1);

?>