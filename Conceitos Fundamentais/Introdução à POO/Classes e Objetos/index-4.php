<?php

class Livro
{
    public $titulo;
    public $autor;
}
$livro1 = new Livro();
$livro1->autor = "João";
$livro2 = new Livro();
$livro2->autor = "Lucas";
$livro3 = new Livro();
$livro3->autor = "Marcos";
echo "Livro 1: Autor $livro1->autor <br> Livro 2: Autor $livro2->autor <br> Livro 3: Autor $livro3->autor"
    ?>