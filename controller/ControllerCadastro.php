<?php


require_once("../model/Veiculo.php");


class cadastroController
{
    private $cadastro;

    public function __construct()
    {
        $this->cadastro = new Veiculo();
        $this->incluir();
    }

    private function incluir()
    {
        $this->cadastro->setMarca($_POST['marca']);
        $this->cadastro->setModelo($_POST['modelo']);
        $this->cadastro->setAno($_POST['ano']);
        $this->cadastro->setPlaca($_POST['placa']);
        $result = $this->cadastro->incluir();

        #echo var_dump($result); // Debugging line to check the result of the inclusion
        #exit;

        if ($result) {
            echo "<script>alert('Veículo cadastrado com sucesso!');document.location='../view/cadastro.php'</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar veículo! Verifique se a placa já está cadastrada.');history.back()</script>";
        }
    }
}

new cadastroController();
