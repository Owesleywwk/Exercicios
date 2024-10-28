<?php

class Carro
{
    public $modelo;
    public $ano;
    public $motor;

    public function __construct($modelo, $ano, $motor)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->motor = $motor;
    }
    public function exibir(): array
    {
        return array(
            "modelo" => $this->modelo,
            "ano" => $this->ano,
            "motor" => $this->motor
        );
    }
}

$carro1 = new Carro("Toyota Corolla", 2020, "1.8L");
var_dump($carro1->exibir());

$carro2 = new Carro("Honda Civic", 2019, "1.6L");
var_dump($carro2->exibir());

$carro3 = new Carro("Ford Focus", 2018, "1.8L");
var_dump($carro3->exibir());

?>