<?php

class Produto
{
    private $nome;
    private $preco;

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }
}

?>