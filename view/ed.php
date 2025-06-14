<!DOCTYPE HTML>
<html>
<?php include("../view/head.php") ?>

<body>
    <?php include("../view/menu.php") ?>
    <?php require_once("../controller/ControllerEd.php"); ?>
    <div class="row">
        <form method="post" action="../controller/ControllerEd.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="marca" name="marca" value="<?php echo $editar->getMarca(); ?>" required autofocus>
                <input class="form-control" type="text" id="modelo" name="modelo" value="<?php echo $editar->getModelo(); ?>" required>
                <input class="form-control" type="text" id="placa" name="placa" value="<?php echo $editar->getPlaca(); ?>" required readonly>
                <input class="form-control" type="number" id="ano" name="ano" value="<?php echo $editar->getAno(); ?>" required>
                <select name="flag" class="form-control mt-2">
                    <?php $c = $editar->getFlag(); ?>
                    <option value="<?php echo $c; ?>"><?php echo ($c == 0) ? "Desativado" : "Ativado"; ?></option>
                    <option value="<?php echo ($c == 0) ? "1" : "0"; ?>"><?php echo ($c != 0) ? "Desativado" : "Ativado"; ?></option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getPlaca(); ?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
</body>

</html>