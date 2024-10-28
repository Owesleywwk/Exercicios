<?php

class ContaBancaria
{
    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return "O saldo atual da sua conta é R$" . number_format($this->saldo, 2, ',', '.') . "<br>";
    }

}

$cliente1 = new ContaBancaria(1000);
echo $cliente1->getSaldo();

?>