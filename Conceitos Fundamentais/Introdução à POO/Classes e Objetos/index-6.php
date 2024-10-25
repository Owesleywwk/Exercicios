<?php

class Funcionario
{
    public $nome;
    public $salario;

    public function salario_anual($salario)
    {
        $anual = $salario * 12;
        return $anual;
    }

}

$funcionario = new Funcionario();
echo $funcionario->salario_anual(1.412);

?>