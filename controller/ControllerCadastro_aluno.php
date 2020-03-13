<?php
require_once("../model/cadastro_aluno.php");
class cadastroController_aluno{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro_aluno();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        
        $this->cadastro->setCpf($_POST['cpf']);
        
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
        $this->cadastro->setEmail($_POST['email']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/inicio_aluno.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }


    }
}
new cadastroController_aluno();
