<?php
require_once("../model/Banco.php");

class DeletaController {
    private $deleta;

    public function __construct($placa) {
        $this->deleta = new Banco();
        if ($this->deleta->deleteVeiculo($placa)) {
            echo "<script>alert('Veículo deletado com sucesso!');document.location='../view/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao deletar veículo!');history.back()</script>";
        }
    }
}

new DeletaController($_GET['placa']);
?>
