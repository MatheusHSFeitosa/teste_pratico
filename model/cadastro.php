<?php
require_once("banco_direcao.php");

class Cadastro extends Banco_direcao {

    private $nome;
    
    private $cpf;
    
    
    private $data;

    private $email;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    
    public function setCpf($string){
        $this->cpf = $string;
    }
    
    public function setData($string){
        $this->data = $string;
    }

    public function setEmail($string){
        $this->email = $string;
    }
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }    
    public function getCpf(){
        return $this->cpf;
    }     
    public function getData(){
        return $this->data;
    }
    public function getEmail(){
        return $this->email;
    }

    public function incluir(){
        return $this->setLivro($this->getNome(),$this->getCpf(),$this->getData(),$this->getEmail());
    }
}
?>
