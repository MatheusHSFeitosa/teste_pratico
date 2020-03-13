<?php

require_once("../init.php");
class Banco_aluno{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setPessoa($nome,$cpf,$data,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO aluno (`nome`, `cpf`, `data`, `email`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$nome,$cpf,$data,$email);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getPessoa(){
        $result = $this->mysqli->query("SELECT * FROM aluno");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array ;

    }

    public function deletePessoa($id){
        if($this->mysqli->query("DELETE FROM `aluno` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaPessoa($id){
        $result = $this->mysqli->query("SELECT * FROM aluno WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updatePessoa($nome,$cpf,$data,$email,$id){
        $stmt = $this->mysqli->prepare("UPDATE `aluno` SET `nome` = ?, `cpf`=?, `data` = ?, `email` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssss",$nome,$cpf,$data,$email,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
