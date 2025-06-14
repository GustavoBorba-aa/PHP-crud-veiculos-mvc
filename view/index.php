<?php require_once('../controller/ControllerLi.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include("../view/head.php"); ?>

<body>
    <?php include("../view/menu.php"); ?>
    <table class="table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Placa</th>
                <th>Flag</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $listar = new listarController();
                $listar->mostrarTabela();
            ?>
        </tbody>
    </table>
</body>
</html>
