<?php
require_once 'pessoa.php';
class Professor extends Pessoa {
    public String $especialidade;
    public float $salario;

   public function __construct($nome, $idade, $cpf,$especialidade, $salario) {
    parent:: __construct ($nome,$idade,$cpf);
    $this-> especialidade = $especialidade;
    $this-> salario = $salario;
   }
   public function getespecialidade() {
    return $this-> especialidade;
   }
   public function setespecialidade($especialidade){
    return $this-> $especialidade;
   }
public function getsalario() {
    return $this->salario;
}
public function setsalario($salario){
    return $this-> $salario;
}

public function exibirInformacoes(){
parent::exibirInformacoes();
  echo "Especialidade:" .$this->especialidade ."<br>";
  echo "Salario" .$this->salario ."<br>";
}





}















?>