<?php


require_once("../model/Banco.php");

class editarController {
    private $editar;
    private $marca;
    private $modelo;
    private $placa;
    private $ano;
    private $flag;

    public function __construct($placa) {
        $this->editar = new Banco();
        $this->carregarDados($placa);
    }

    private function carregarDados($placa) {
        $row = $this->editar->pesquisaVeiculo($placa);
        if ($row) {
            $this->marca = $row['marca'];
            $this->modelo = $row['modelo'];
            $this->placa = $row['placa'];
            $this->ano = $row['ano'];
            $this->flag = $row['flag'];
        }
    }

    public function editarFormulario($marca, $modelo, $placa, $ano, $flag, $id) {
        if ($this->editar->updateVeiculo($marca, $modelo, $placa, $ano, $flag, $id)) {
            echo "<script>alert('Veículo atualizado com sucesso!');document.location='../view/index.php'</script>";
        } else {
            echo "<script>alert('Erro ao atualizar veículo!');history.back()</script>";
        }
    }

    public function getMarca() { return $this->marca; }
    public function getModelo() { return $this->modelo; }
    public function getPlaca() { return $this->placa; }
    public function getAno() { return $this->ano; }
    public function getFlag() { return $this->flag; }
}

$placa = filter_input(INPUT_GET, 'placa');
$editar = new editarController($placa);

if (isset($_POST['submit'])) {
 
    $editar->editarFormulario(
        $_POST['marca'],
        $_POST['modelo'],
        $_POST['placa'],
        $_POST['ano'],
        $_POST['flag'],
        $_POST['id']
    );
}
?>
