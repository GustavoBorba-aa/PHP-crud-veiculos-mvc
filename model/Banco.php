<?php
require_once("../init.php");

class Banco {
    protected $mysqli;

    public function __construct() {
        $this->conexao();
    }

    private function conexao() {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    }

    public function setVeiculo($marca, $modelo, $placa, $ano) {
        $stmt = $this->mysqli->prepare("INSERT INTO veiculo (marca, modelo, placa, ano, flag) VALUES (?, ?, ?, ?, 1)");
        $stmt->bind_param("ssss", $marca, $modelo, $placa, $ano);
        return $stmt->execute();
    }

    public function getVeiculo() {
        $result = $this->mysqli->query("SELECT * FROM veiculo");
        $array = [];
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $array[] = $row;
        }
        return $array;
    }

    public function deleteVeiculo($placa) {
        $stmt = $this->mysqli->prepare("DELETE FROM veiculo WHERE placa = ?");
        $stmt->bind_param("s", $placa);
        return $stmt->execute();
    }

    public function pesquisaVeiculo($placa) {
        $stmt = $this->mysqli->prepare("SELECT * FROM veiculo WHERE placa = ?");
        $stmt->bind_param("s", $placa);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateVeiculo($marca, $modelo, $placa, $ano, $flag, $id) {
        $stmt = $this->mysqli->prepare("UPDATE veiculo SET marca = ?, modelo = ?, placa = ?, ano = ?, flag = ? WHERE placa = ?");
        $stmt->bind_param("ssssss", $marca, $modelo, $placa, $ano, $flag, $id);
        return $stmt->execute();
    }
}
?>
