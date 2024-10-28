<?php

class Funcionario
{
    private $salario;

    public function __construct($salario)
    {
        $this->salario = $salario;
    }

    

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
        return $this;
    }

    public function aumentarSalario($percentual){
        $this->salario += (($percentual / 100) * $this->salario);
    }
}

$funcionario = new Funcionario(1000);
echo $funcionario->getSalario();
$funcionario->aumentarSalario(10);
echo $funcionario->getSalario();

?>