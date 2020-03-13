<?php
require_once("../model/cadastro_disciplina.php");
class cadastroController_disciplina{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro_disciplina();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        
        
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/inicio_disciplina.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }


    }
}
new cadastroController_disciplina();
