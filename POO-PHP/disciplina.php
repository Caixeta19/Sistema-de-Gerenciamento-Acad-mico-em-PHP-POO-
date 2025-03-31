<?php

class Disciplina {
    public string $nome;
    public Professor $professor;
    public array $alunos;

    // Construtor
    public function __construct($nome, Professor $professor){
        $this->nome = $nome;
        $this->professor = $professor;
        $this->alunos = [];
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getProfessor() {
        return $this->professor;
    }

    public function setProfessor(Professor $professor) {
        $this->professor = $professor;
    }


    public function adicionarAlunos(array $alunos) {
        foreach ($alunos as $aluno) {
            $this->alunos[] = $aluno;
        }
    }

    public function listarAlunos() {
        if (is_array($this->alunos) && !empty($this->alunos)) {
            echo "Alunos matriculados:<br>";
            foreach ($this->alunos as $aluno) {
                echo "Aluno: " . $aluno->getNome() . "<br>";
            }
        } else {
            echo "Nenhum aluno matriculado.<br>";
        }
    }

    // Método para exibir informações da disciplina
    public function exibirInformacoes() {
        echo "Disciplina: " . $this->nome . "<br>";
        echo "Professor: " . $this->professor->getNome() . "<br>";
        echo "Especialidade: " . $this->professor->especialidade . "<br>";
        $this->listarAlunos(); 
    }
}
?>
