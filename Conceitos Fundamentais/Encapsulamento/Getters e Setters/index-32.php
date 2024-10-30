<?php

class Pessoa
{
    private $nome;
    private $idade;

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        if ($idade > 0) {
            $this->idade = $idade;
            return $this;
        } else {
            return "Idade tem que ser maior que 0";
        }
    }
}

$pessoa = new Pessoa("Keyllian", 12);
echo $pessoa->setIdade(-10);

?>