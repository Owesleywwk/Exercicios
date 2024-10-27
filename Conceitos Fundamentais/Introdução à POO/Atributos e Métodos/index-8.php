<?php

class Cachorro
{
    public $nome;
    public $raca;

    public function latir()
    {
        return "AUAU";
    }

}

$cachorro1 = new Cachorro();
echo $cachorro1->latir()

    ?>