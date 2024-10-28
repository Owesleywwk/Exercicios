<?php

class ContaBancaria
{
    public $propietario;
    public $id;
    public $saldo;

    public function __construct($propietario, $id, $saldo)
    {
        $this->propietario = $propietario;
        $this->id = $id;
        $this->saldo = $saldo;
    }
    public function exibirSaldo()
    {
        echo "A conta com o ID " . $this->id . " tem um saldo de R$" . $this->saldo . "<br>";
    }

}
$conta1 = new ContaBancaria("Keyllian", 1, 2000);
$conta1->exibirSaldo();

$conta2 = new ContaBancaria("João", 2, 1300);
$conta2->exibirSaldo();

$conta3 = new ContaBancaria("Albano", 3, 3500);
$conta3->exibirSaldo();

?>