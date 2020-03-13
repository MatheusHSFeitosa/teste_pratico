<?php
require_once("../model/banco_docente.php");
class listarControllerDocente{

    private $lista;

    public function __construct(){
        $this->lista = new Banco_docente();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getPessoa();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            
            echo "<td>".$value['cpf'] ."</td>";
            
            echo "<td>".$value['data'] ."</td>";
            
            echo "<td><a class='btn btn-warning' href='editar_docente.php?id=".$value['nome']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar_docente.php?id=".$value['nome']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

