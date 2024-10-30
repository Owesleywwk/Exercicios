<?php

class Aluno
{
    private $nome;
    private $nota;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
}

?>