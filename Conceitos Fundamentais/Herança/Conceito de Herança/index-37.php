<?php

class Veiculo
{
    protected $marca;
    protected $ano;

    public function __construct($marca, $ano)
    {
        $this->marca = $marca;
        $this->ano = $ano;
    }
}

class Carro extends Veiculo
{
    protected $modelo;

    public function __construct($marca, $ano, $modelo)
    {
        parent::__construct($marca, $ano);
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }
    public function exibir()
    {
        return array(
            "Marca" => $this->marca,
            "Ano" => $this->ano,
            "Modelo" => $this->modelo
        );
    }
}


$carro = new Carro("Ferrari", "2020", "Senna");
print_r($carro->exibir());

?>