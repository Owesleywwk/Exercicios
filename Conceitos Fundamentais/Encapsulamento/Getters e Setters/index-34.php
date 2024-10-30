<?php

class Veiculo
{
    private $velocidade;

    public function __construct($velocidade = 0)
    {
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
    {
        return $this->velocidade . "Km/h";
    }

    public function setVelocidade($velocidade)
    {
        if ($velocidade > 0) {
            $this->velocidade = $velocidade;
            return $this;
        } else {
            return "A velocidade deve ser maior que 0 Km/h";
        }
    }
}

$carro = new Veiculo();
echo $carro->setVelocidade(-01);
$carro->setVelocidade(120);

echo "<br>";

echo $carro->getVelocidade();

?>