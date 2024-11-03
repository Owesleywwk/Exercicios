<?php
// Classe base
abstract class Forma {
    // Método abstrato que será implementado nas subclasses
    abstract public function calcularArea();
}

// Subclasse para Círculo
class Circulo extends Forma {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2); // Área do círculo: π * r^2
    }
}

// Subclasse para Quadrado
class Quadrado extends Forma {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2); // Área do quadrado: lado^2
    }
}

// Exemplo de uso
$circulo = new Circulo(5);
echo "Área do círculo: " . $circulo->calcularArea() . "\n";

$quadrado = new Quadrado(4);
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";
?>
