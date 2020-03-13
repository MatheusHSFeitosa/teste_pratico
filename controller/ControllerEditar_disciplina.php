<?php
require_once("../model/banco_disciplina.php");

class editarController {

    private $editar;
    private $nome;        
    private $data; 

    public function __construct($id){
        $this->editar = new Banco_disciplina();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaDisciplina($id);
        
        $this->nome         =$row['nome'];             
        $this->data         =$row['data'];   
       

    }
    public function editarFormulario($nome,$data,$id){
        if($this->editar->updateDisciplina($nome,$data,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/inicio_disciplina.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function getData(){
        return $this->data;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['data'],$_POST['id']);
}
?>
