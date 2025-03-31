<?php 

require_once 'pessoa.php';
class Aluno extends Pessoa {

public String $matricula;
public String $curso;

 public function __construct($nome, $idade, $cpf,$matricula,$curso){
    parent:: __construct ($nome, $idade, $cpf);
    $this->matricula = $matricula;
    $this->curso = $curso;
    
 }
 public function getmatricula() {
    return $this->matricula;
}

public function setmatricula($matricula) {
    $this->cpf = $matricula;
}
public function getcurso() {
    return $this->curso;
}

public function setcurso($curso) {
    $this->cpf = $curso;
}

 public function exibirInformacoes() {
    parent::exibirInformacoes();
  echo"Matricula:" .$this->matricula . "<br>";
  echo"Curso:" .$this->curso . "<br>";

}


}
?>