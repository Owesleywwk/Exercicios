<?php

class Casa
{
    private $preco;

    public function __construct($preco = 0)
    {
        $this->setPreco($preco);
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        if ($preco >= 0) {
            $this->preco = $preco;
            return "R$" . number_format($this->preco, 2, ".", ",");
        } else {
            return "O valor deve ser maior que zero";
        }
    }
}

$casa = new Casa();
echo $casa->setPreco(-10);
echo "<br>";
echo $casa->setPreco(10000);
echo "<br>";
echo $casa->getPreco();

?>