<?php
    require_once("../init.php");
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM turma WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Nome do curso: ".$rows_cursos['nome']."<br>";
    }
?>