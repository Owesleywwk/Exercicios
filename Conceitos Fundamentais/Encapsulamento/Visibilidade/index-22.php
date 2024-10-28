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
        return "O saldo atual da sua conta é R$" . $this->saldo . "<br>";
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return "Deposito realizado com sucesso!<br>";
    }
    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return "Saque realizado com sucesso!<br>";
    }

}

$cliente1 = new ContaBancaria(1000);
echo $cliente1->getSaldo();
echo $cliente1->depositar(700);
echo $cliente1->getSaldo();
echo $cliente1->sacar(150);
echo $cliente1->getSaldo();

?>