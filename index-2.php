Desafio 2: Sistema de Biblioteca
Crie uma classe chamada Livro com os atributos:

titulo
autor
ano_publicacao
disponivel (um booleano)
Métodos:

emprestar(): Verifique se o livro está disponível e atualize o atributo disponivel para False.
devolver(): Atualize o atributo disponivel para True.
__str__(): Método mágico que retorna uma string com as informações do livro.
Desafio extra: Crie uma classe Biblioteca que gerencie uma lista de livros. Implemente métodos para adicionar, remover e buscar livros por título.


<?php
echo "<br><br><hr>";

class Livro
{
    private $titulo;
    private $autor;
    private $ano_publicacao;
    private $disponivel;

    public function __construct($t, $a, $a_p, $d)
    {
        $this->titulo = $t;
        $this->autor = $a;
        $this->ano_publicacao = $a_p;
        $this->disponivel = $d;
    }

    public function emprestar()
    {
        if ($this->disponivel == true) {
            $this->disponivel = false;
            return "O $this->titulo emprestado com sucesso!";
        } else {
            return "O livro $this->titulo já está emprestado!";
        }
    }
    public function devolver()
    {
        if ($this->disponivel == true) {
            return "Esse livro já foi devolvido";
        } else {
            $this->disponivel = true;
            return "Livro devolvido com sucesso!";
        }
    }
    public function __toString(){
        return "$this->titulo, $this->autor, $this->ano_publicacao, $this->disponivel";
    }

}

$pessoa = new Livro("Raponzel", "João", 2020, true);

echo $pessoa ." | ". var_dump($pessoa);
echo "<br><hr>";
echo $pessoa->emprestar();
echo "<br><hr>";
echo $pessoa->devolver();
echo "<br><hr>";

?>