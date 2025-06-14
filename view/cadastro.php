<!DOCTYPE HTML>
<html>
<?php include("../view/head.php") ?>

<body>
    <?php include("../view/menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="marca" name="marca" placeholder="Marca" required autofocus>
                <input class="form-control" type="text" id="modelo" name="modelo" placeholder="Modelo" required>
                <input class="form-control" type="text" id="placa" name="placa" placeholder="Placa" required>
                <input class="form-control" type="number" id="ano" name="ano" placeholder="Ano" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>
