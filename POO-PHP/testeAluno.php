<?php

require_once 'aluno.php';
require_once 'disciplina.php';
require_once 'professor.php';

// Objeto Professor
$professor = new Professor("Wilton", 45, "123.456.789-01", "Programação", 20000.00);

// Objeto Aluno
$aluno1 = new Aluno("Guilherme", 19, "111.222.333-44", "2022001", "Engenharia");
$aluno2 = new Aluno("Helena", 20, "555.666.777-88", "2022002", "Nutrição");

// Objeto Disciplina
$disciplina = new Disciplina("Programação Orientada a Software Básico", $professor);

// Adicionando os alunos à disciplina
$disciplina->adicionarAlunos([$aluno1, $aluno2]);

// Exibindo as informações da disciplina, incluindo os alunos
$disciplina->exibirInformacoes();

?>
