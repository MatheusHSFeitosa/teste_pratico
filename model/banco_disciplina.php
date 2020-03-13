<?php

require_once("../init.php");
class Banco_disciplina{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setDisciplina($nome,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO disciplina (`nome`,`data`) VALUES (?,?)");
        $stmt->bind_param("ss",$nome,$data);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getDisciplina(){
        $result = $this->mysqli->query("SELECT * FROM disciplina");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array ;

    }

    public function deleteDisciplina($id){
        if($this->mysqli->query("DELETE FROM `disciplina` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaDisciplina($id){
        $result = $this->mysqli->query("SELECT * FROM disciplina WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateDisciplina($nome,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `disciplina` SET `nome` = ?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sss",$nome,$data,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
