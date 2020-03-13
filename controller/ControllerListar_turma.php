<?php
require_once("../model/banco_turma.php");
class listarControllerTurma{

    private $lista;

    public function __construct(){
        $this->lista = new Banco_turma();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getTurma();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            
            echo "<td>".$value['ano'] ."</td>";
            
            echo "<td>".$value['data'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar_turma.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar_turma.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

