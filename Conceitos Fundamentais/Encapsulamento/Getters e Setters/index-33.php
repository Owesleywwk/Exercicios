<?php

class ContaBancaria
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

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            return "Valor inválido! O depósito mínimo permitido é de R$0,01";
        }
    }
    public function sacar($valor)
    {
        if (($this->saldo - $valor) >= 0) {
            $this->saldo -= $valor;
        } else {
            return "Por favor, realize um saque entre R$0,01 e R$" . $this->saldo;
        }
    }

}

$conta = new ContaBancaria();
$conta->setSaldo(1000);
echo $conta->sacar(10000);
echo "<br>";
echo $conta->depositar(-10);

?>