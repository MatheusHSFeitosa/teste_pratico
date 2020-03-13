<?php
require_once("banco_turma.php");

class Cadastro_turma extends Banco_turma {

    private $nome;
    
    private $ano;
    
    
    private $data;


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    
    public function setAno($string){
        $this->ano = $string;
    }
    
    public function setData($string){
        $this->data = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }    
    public function getAno(){
        return $this->ano;
    }     
    public function getData(){
        return $this->data;
    }


    public function incluir(){
        return $this->setTurma($this->getNome(),$this->getAno(),$this->getData());
    }
}
?>
