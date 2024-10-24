Desafio 1: Criando a Primeira Classe
Crie uma classe chamada Carro. Ela deve ter uma propriedade pública modelo e um método público dirigir(), que apenas exibe uma mensagem dizendo "O carro está dirigindo". Instancie a classe e use o método e a propriedade.

Objetivo: Entender a criação de classes, propriedades e métodos em PHP.


<?php
echo"<hr><br>";

class Carro{
    public $modelo;

    public function dirigir(){
        return "O carro $this->modelo está dirigindo!";
    }
}

$carro = new Carro();
$carro->modelo = "Corsa";
echo $carro->dirigir();

?>