<?php

class Aluno
{
    public $nota1;
    public $nota2;
    public $nota3;

    public function nota($nota1, $nota2, $nota3): float|int
    {
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return $media;
    }

}

$aluno = new Aluno();
echo $aluno->nota(7.5, 8, 9.7);

?>