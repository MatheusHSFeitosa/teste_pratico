<?php

require_once("../init.php");
class Banco_direcao{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setLivro($nome,$cpf,$data,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO direcao (`nome`, `cpf`, `data`, `email`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$nome,$cpf,$data,$email);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getLivro(){
        $result = $this->mysqli->query("SELECT * FROM direcao");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array ;

    }

    public function deleteLivro($id){
        if($this->mysqli->query("DELETE FROM `direcao` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaLivro($id){
        $result = $this->mysqli->query("SELECT * FROM direcao WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateLivro($nome,$cpf,$data,$email,$id){
        $stmt = $this->mysqli->prepare("UPDATE `direcao` SET `nome` = ?, `cpf`=?, `data` = ?, `email` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssss",$nome,$cpf,$data,$email,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
