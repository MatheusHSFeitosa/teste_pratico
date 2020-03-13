<?php
require_once("banco_disciplina.php");

class Cadastro_disciplina extends Banco_disciplina {

    private $nome;
    
    private $data;


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
       
    public function setData($string){
        $this->data = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }    
    
    public function getData(){
        return $this->data;
    }

    public function incluir(){
        return $this->setDisciplina($this->getNome(),$this->getData());
    }
}
?>
