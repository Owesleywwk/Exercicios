<?php

class Carro
{
    private $velocidade;

    public function __construct($velocidade = 0)
    {
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;
        return $this;
    }

    public function addVelocidade($aumentar)
    {
        $this->velocidade += $aumentar;
        return $this->velocidade;
    }

}

$carro = new Carro();
echo "<br>";
echo $carro->getVelocidade();

echo "<br>";

$carro->addVelocidade(40);
echo $carro->getVelocidade();

?>