<?php

require_once("../init.php");
class Banco_turma{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setTurma($nome,$ano,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO turma (`nome`, `ano`, `data`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$ano,$data);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getTurma(){
        $result = $this->mysqli->query("SELECT * FROM turma");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array ;

    }

    public function deleteTurma($id){
        if($this->mysqli->query("DELETE FROM `turma` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaTurma($id){
        $result = $this->mysqli->query("SELECT * FROM turma WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateTurma($nome,$ano,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `turma` SET `nome` = ?, `ano`=?, `data` = ? WHERE `nome` = ?");
        $stmt->bind_param("ssss",$nome,$ano,$data,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
