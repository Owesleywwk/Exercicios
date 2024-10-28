<?php

class Produto
{
    public $nome;
    private $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->nome . " R$" . number_format($this->preco, 2, ".", ",");
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }

    public function modificar($novoValor)
    {
        $this->preco = $novoValor;
        return $this->nome . ": Novo valor: R$" . number_format($this->preco, 2, ".", ",");
    }

}

$detergente = new Produto("Limpol", 10);
echo $detergente->getPreco();
echo "<br>";
echo $detergente->modificar(12);

?>