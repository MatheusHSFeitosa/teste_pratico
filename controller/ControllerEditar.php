<?php
require_once("../model/banco_direcao.php");

class editarController {

    private $editar;
    private $nome;    
    private $cpf;    
    private $data; 
    private $email;   

    public function __construct($id){
        $this->editar = new Banco_direcao();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaLivro($id);
        $this->nome         =$row['nome'];        
        $this->quantidade   =$row['cpf'];        
        $this->data         =$row['data'];   
        $this->email        =$row['email'];       

    }
    public function editarFormulario($nome,$cpf,$data,$email,$id){
        if($this->editar->updateLivro($nome,$cpf,$data,$email,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/direcao.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function getCpf(){
        return $this->quantidade;
    }
    
    public function getData(){
        return $this->data;
    }

    public function getEmail(){
        return $this->email;
    }
    


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['cpf'],$_POST['data'],$_POST['email'],$_POST['id']);
}
?>
