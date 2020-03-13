<?php
require_once("../model/cadastro_docente.php");
class cadastroController_docente{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro_docente();
        $this->incluir_docente();
    }

    private function incluir_docente(){
        $this->cadastro->setNome($_POST['nome']);
        
        $this->cadastro->setCpf($_POST['cpf']);
        
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
        $this->cadastro->setEmail($_POST['email']);
        $result = $this->cadastro->incluir_docente();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/inicio_docente.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }


    }
}
new cadastroController_docente();
