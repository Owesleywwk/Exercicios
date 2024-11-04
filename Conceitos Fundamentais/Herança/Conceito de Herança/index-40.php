<?php
// Classe base Pessoa
class Pessoa {
    protected $nome;
    protected $endereco;

    public function __construct($nome, $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }
}

// Subclasse PessoaFisica
class PessoaFisica extends Pessoa {
    private $cpf;
    private $dataNascimento;

    public function __construct($nome, $endereco, $cpf, $dataNascimento) {
        parent::__construct($nome, $endereco);
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }
}

// Subclasse PessoaJuridica
class PessoaJuridica extends Pessoa {
    private $cnpj;
    private $razaoSocial;

    public function __construct($nome, $endereco, $cnpj, $razaoSocial) {
        parent::__construct($nome, $endereco);
        $this->cnpj = $cnpj;
        $this->razaoSocial = $razaoSocial;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }
}

// Exemplo de uso
$pessoaFisica = new PessoaFisica("Maria Silva", "Rua A, 123", "123.456.789-00", "1990-01-01");
echo "Nome: " . $pessoaFisica->getNome() . "\n";
echo "CPF: " . $pessoaFisica->getCpf() . "\n";

$pessoaJuridica = new PessoaJuridica("Empresa X", "Av. B, 456", "12.345.678/0001-99", "Empresa X LTDA");
echo "Nome Fantasia: " . $pessoaJuridica->getNome() . "\n";
echo "CNPJ: " . $pessoaJuridica->getCnpj() . "\n";
?>
