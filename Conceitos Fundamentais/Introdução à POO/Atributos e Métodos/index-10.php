<?php

class Carro
{
    public $modelo;
    public $ano;
    public $velocidade;

    public function __construct($m, $a, $va)
    {
        $this->modelo = $m;
        $this->ano = $a;
        $this->velocidade = $va;
    }
    public function acelerar($vd)
    {
        if ($vd > $this->velocidade) {
            for (; $this->velocidade <= $vd; $this->velocidade++) {
                echo "Km/h " . $this->velocidade . "<br>";
                if ($this->velocidade == $vd) {
                    echo "Velocidade desejada atingida! <br>";
                    break;
                }
            }
        } else {
            return "Impossível acelerar <br>";
        }
    }
    public function freiar($vd)
    {
        if ($vd < $this->velocidade) {
            for ($vd; $this->velocidade >= $vd; $this->velocidade--) {
                echo "Km/h" . $this->velocidade . "<br>";
                if ($this->velocidade == $vd) {
                    echo "Velocidade desejada atingida! <br>";
                    break;
                }

            }
        } else {
            echo "Impossível freiar <br>";
        }
    }

}

$carro1 = new Carro("Skyline", 1998, 350);
$carro1->freiar(300);
$carro2 = new Carro("Gol", 2010, 0);
$carro2->acelerar(40);
echo $carro1->velocidade . "<br>";
$carro1->freiar(350);

?>