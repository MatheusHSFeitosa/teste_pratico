<?php
require_once("../model/banco_aluno.php");
class listarControllerAluno{

    private $lista;

    public function __construct(){
        $this->lista = new Banco_aluno();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getPessoa();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            
            echo "<td>".$value['cpf'] ."</td>";
            
            echo "<td>".$value['data'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar_aluno.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar_aluno.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

