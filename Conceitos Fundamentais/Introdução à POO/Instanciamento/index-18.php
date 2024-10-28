<?php

class Aluno
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function calcularMedia($n1, $n2, $n3)
    {
        $media = ($n1 + $n2 + $n3) / 3;
        echo $this->nome . " ficou com a média de " . number_format($media, 1) . "<br>";
    }

}

$aluno1 = new Aluno("Keyllian", 18);
$aluno1->calcularMedia(3, 9, 10);

$aluno2 = new Aluno("Lucas", 21);
$aluno2->calcularMedia(7.2, 6, 1);

$aluno3 = new Aluno("Avila", 15);
$aluno3->calcularMedia(9, 9, 8.6);

$aluno4 = new Aluno("Tellys", 29);
$aluno4->calcularMedia(4, 2.5, 10);

?>