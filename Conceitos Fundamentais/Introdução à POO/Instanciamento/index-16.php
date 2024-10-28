<?php

class Cachorro
{
    public $nome;
    public $raca;
    public $idade;

    public function __construct($nome, $raca, $idade)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
    }
    public function __toString()
    {
        return "Nome: " . $this->nome . " | Raça: " . $this->raca . " | Idade: " . $this->idade;

    }

}

$cachorro1 = new Cachorro("Rex", "Caramelo", 2);
$cachorro2 = new Cachorro("Boby", "Pastor Alemão", 4);
echo $cachorro1;
echo "<br>";
echo $cachorro2;

?>