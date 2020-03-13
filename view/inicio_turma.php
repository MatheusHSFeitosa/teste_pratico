<?php require_once("../controller/ControllerListar_turma.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
   <?php include("menu.php"); ?>
   <a href="cadastro_turma.php" class="btn btn-success">Cadastar</a>

   <h1>Pesquisar Cursos</h1>
<form method="POST" action="pesquisar.php">
    Pesquisar:<input type="text" name="pesquisar" placeholder="PESQUISAR">
    <input type="submit" value="ENVIAR">
</form>


    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ano</th>
                <th>Data de criação</th>                
                <th>Opçoes</th>                  
            </tr>
        </thead>
        <tbody>
            <?php new listarControllerTurma();  ?>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
