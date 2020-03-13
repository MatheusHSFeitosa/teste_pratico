<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>                
                <input class="form-control" type="number" id="cpf" name="cpf" value="<?php echo $editar->getCpf(); ?>" required>                     
                <input class="form-control" type="date" id="data" name="data" value="<?php echo $editar->getData(); ?>" required>
                <input class="form-control" type="email" id="email" name="email" value="<?php echo $editar->getEmail(); ?>" required>

            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
      
</body>

</html>
