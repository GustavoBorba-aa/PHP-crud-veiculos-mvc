<?php
require_once("../model/Banco.php");

class listarController {
    private $lista;

    public function __construct() {
        $this->lista = new Banco();
    }

    public function mostrarTabela() {
        $row = $this->lista->getVeiculo();
        foreach ($row as $value) {
            echo "<tr>";
            echo "<td>" . $value['marca'] . "</td>";
            echo "<td>" . $value['modelo'] . "</td>";
            echo "<td>" . $value['ano'] . "</td>";
            echo "<td>" . $value['placa'] . "</td>";
            echo "<td>" . ($value['flag'] == "0" ? "Desativado" : "Ativado") . "</td>";
            echo "<td>
                    <a class='btn btn-warning' href='../view/ed.php?placa=" . $value['placa'] . "'>Editar</a>
                    <a class='btn btn-danger' href='../controller/ControllerDelete.php?placa=" . $value['placa'] . "'>Excluir</a>
                  </td>";
            echo "</tr>";
        }
    }
}
?>
