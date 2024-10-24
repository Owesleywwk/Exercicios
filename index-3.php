Desafio 3: Sistema de Funcionários
Crie uma classe Funcionario com os seguintes atributos:
- nome
- salario
- cargo

Métodos:
- aumentar_salario(percentual): Aumenta o salário em uma porcentagem.
- __str__(): Retorna as informações do funcionário.


<?php

class Funcionario {
    private $nome;
    private $salario;
    private $cargo;

    public function __construct($n, $s, $c) {
        $this->nome = $n;
        $this->salario = $s;
        $this->cargo = $c;
    }
    public function aumentar_salario($porcentagem): string {
        $aumento = $this->salario * ($porcentagem / 100);
        $this->salario += $aumento;
        return "Esse é o seu novo salário com aumento: R$". $this->salario;
    }

    public function __tostring(): string{
        return "Nome: $this->nome | Salário: $this->salario | Cargo: $this->cargo";
    }

    public function getSalario(){
        return $this->salario;
    }
    
}

echo $avila = new Funcionario("Avila", 1000, "Gerente"); 
echo "<br>";
echo $avila->aumentar_salario(30);
echo "<br>";
echo $avila->getSalario()

?>