<?php
require_once("../model/banco_disciplina.php");
class listarControllerDisciplina{

    private $lista;

    public function __construct(){
        $this->lista = new Banco_disciplina();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getDisciplina();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            
            echo "<td>".$value['data'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar_disciplina.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar_disciplina.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

