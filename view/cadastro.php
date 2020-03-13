<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required autofocus>
                
                <input class="form-control" type="number" id="cpf" name="cpf" placeholder="cpf(11 digitos)" required>
                
                <input class="form-control" type="date" id="data" name="data" placeholder="Data nascimento" required>

                <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    
</body>

</html>
