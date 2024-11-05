<?php

// Classe base Conta
class Conta {
    protected $saldo;

    public function __construct($saldoInicial = 0) {
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado com sucesso.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado com sucesso.<br>";
        } else {
            echo "Saldo insuficiente ou valor inválido.<br>";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// Subclasse ContaCorrente
class ContaCorrente extends Conta {
    private $taxaSaque = 2.50; // Taxa de saque para conta corrente

    public function sacar($valor) {
        $valorComTaxa = $valor + $this->taxaSaque;
        if ($valorComTaxa <= $this->saldo) {
            $this->saldo -= $valorComTaxa;
            echo "Saque de R$ $valor realizado com taxa de R$ {$this->taxaSaque}. Saldo atual: R$ {$this->saldo}<br>";
        } else {
            echo "Saldo insuficiente para saque com taxa.<br>";
        }
    }
}

// Subclasse ContaPoupanca
class ContaPoupanca extends Conta {
    private $taxaJuros = 0.005; // Taxa de juros de 0.5%

    public function depositar($valor) {
        if ($valor > 0) {
            $valorComJuros = $valor + ($valor * $this->taxaJuros);
            $this->saldo += $valorComJuros;
            echo "Depósito de R$ $valor realizado com juros de R$ " . ($valor * $this->taxaJuros) . ". Saldo atual: R$ {$this->saldo}<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }
}

// Exemplo de Uso

// Conta Corrente
echo "<strong>Conta Corrente:</strong><br>";
$contaCorrente = new ContaCorrente(100);
$contaCorrente->depositar(50);
$contaCorrente->sacar(30);
echo "Saldo final Conta Corrente: R$ " . $contaCorrente->getSaldo() . "<br><br>";

// Conta Poupança
echo "<strong>Conta Poupança:</strong><br>";
$contaPoupanca = new ContaPoupanca(200);
$contaPoupanca->depositar(100);
$contaPoupanca->sacar(50);
echo "Saldo final Conta Poupança: R$ " . $contaPoupanca->getSaldo() . "<br>";

?>
