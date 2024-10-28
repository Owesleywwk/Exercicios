<?php

class Veiculo
{
    public $marca;
    public $ano;

    public function __construct($m, $a)
    {
        $this->marca = $m;
        $this->ano = $a;
    }
}

$carro1 = new Veiculo("Honda", 2021);

$moto = new Veiculo("Yamaha", 2011);

$lancha = new Veiculo("Ferrari", 2017);

?>