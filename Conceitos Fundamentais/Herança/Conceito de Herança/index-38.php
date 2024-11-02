<?php
// Classe base Funcionario
class Funcionario {
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }
}

// Subclasse Gerente
class Gerente extends Funcionario {
    private $setor;

    public function __construct($nome, $salario, $setor) {
        parent::__construct($nome, $salario);
        $this->setor = $setor;
    }

    public function getSetor() {
        return $this->setor;
    }
}

// Subclasse Operario
class Operario extends Funcionario {
    private $turno;

    public function __construct($nome, $salario, $turno) {
        parent::__construct($nome, $salario);
        $this->turno = $turno;
    }

    public function getTurno() {
        return $this->turno;
    }
}

// Testando as classes
$gerente = new Gerente("Ana", 5000, "Financeiro");
echo "Gerente: " . $gerente->getNome() . "\n";
echo "Salário: " . $gerente->getSalario() . "\n";
echo "Setor: " . $gerente->getSetor() . "\n";

$operario = new Operario("Carlos", 2000, "Noturno");
echo "\nOperário: " . $operario->getNome() . "\n";
echo "Salário: " . $operario->getSalario() . "\n";
echo "Turno: " . $operario->getTurno() . "\n";
?>
