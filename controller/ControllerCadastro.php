<?php
require_once("../model/cadastro.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        
        $this->cadastro->setCpf($_POST['cpf']);
        
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
        $this->cadastro->setEmail($_POST['email']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }


    }
}
new cadastroController();
