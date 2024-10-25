<?php

class ContaBancaria
{
    public $titular;
    public $saldo;
    public $pix;

    public function __construct($t, $s, $p)
    {
        $this->titular = $t;
        $this->saldo = $s;
        $this->pix = $p;
    }

    public function depositar($p, $deposito)
    {
        if ($this->pix === $p) {
            $this->saldo += $deposito;
            return "Novo saldo após depostivo de $deposito: R$: $this->saldo";
        } else {
            return "Chave pix inválida!";
        }
    }
}

$cliente1 = new ContaBancaria("Keyllian", 2000, "key@gmail.com");
echo $cliente1->depositar("key@gmail.com", 100);
echo "<br>";
echo $cliente1->saldo;
echo "<br>";
echo $cliente1->depositar("key@gmail.com", 170);
echo "<br>";
echo $cliente1->saldo;
echo "<br>";
echo $cliente1->depositar("keyllian@gmail.com", 170);

?>