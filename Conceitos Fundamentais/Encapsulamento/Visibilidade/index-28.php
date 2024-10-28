<?php

class Conta
{
    private $saldo;

    public function __construct($saldo = 0)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function alterarSaldo($saldo)
    {
        if ($saldo > 0) {
            $this->saldo = $saldo;
        } else {
            return "Não é possível";
        }
        return $this;
    }
}

$conta = new Conta();

echo $conta->getSaldo();
echo "<br>";

$conta->alterarSaldo(1000);
echo $conta->getSaldo();
echo "<br>";

echo $conta->alterarSaldo(-250);

?>