<?php
require_once("../model/banco_disciplina.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco_disciplina();
        if($this->deleta->deleteDisciplina($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/inicio_disciplina.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>