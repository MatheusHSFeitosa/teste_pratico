<?php
require_once("../model/banco_aluno.php");
class deleta {
    private $deleta;

    public function __construct($id){
        $this->deleta = new Banco_aluno();
        if($this->deleta->deletePessoa($id)== TRUE){
            echo "<script>alert('Registro deletado com sucesso!');document.location='../view/inicio_aluno.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);
?>