<?php
require_once("../model/banco_turma.php");

class editarController_turma {

    private $editar;
    private $nome;    
    private $ano;    
    private $data;    

    public function __construct($id){
        $this->editar = new Banco_turma();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaTurma($id);
        $this->nome         =$row['nome'];        
        $this->ano          =$row['ano'];        
        $this->data         =$row['data'];          

    }
    public function editarFormulario($nome,$ano,$data,$id){
        if($this->editar->updateTurma($nome,$ano,$data,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/inicio_turma.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function getAno(){
        return $this->ano;
    }
    
    public function getData(){
        return $this->data;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController_turma($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['ano'],$_POST['data'],$_POST['id']);
}
?>
