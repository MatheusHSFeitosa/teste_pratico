<?php
require_once("../model/cadastro_turma.php");
class cadastroController_turma{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro_turma();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        
        $this->cadastro->setAno($_POST['ano']);
        
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
        
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/inicio_turma.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }


    }
}
new cadastroController_turma();
