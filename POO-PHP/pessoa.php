<?php
class Pessoa {
    
    public string $nome;
    public int $idade;
    public string $cpf;


    public function __construct($nome, $idade, $cpf){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function exibirInformacoes(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade. "<br>";
        echo "Cpf: " . $this->cpf . "<br>";
    }
}







?>