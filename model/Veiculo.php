<?php
require_once("../model/Banco.php");

class Veiculo extends Banco {
    private $marca;
    private $modelo;
    private $placa;
    private $ano;
    private $flag;

    public function setMarca($string) { $this->marca = $string; }
    public function setModelo($string) { $this->modelo = $string; }
    public function setPlaca($string) { $this->placa = $string; }
    public function setAno($string) { $this->ano = $string; }
    public function setFlag($string) { $this->flag = $string; }

    public function getMarca() { return $this->marca; }
    public function getModelo() { return $this->modelo; }
    public function getPlaca() { return $this->placa; }
    public function getAno() { return $this->ano; }
    public function getFlag() { return $this->flag; }

    public function incluir() {
        return $this->setVeiculo($this->getMarca(), $this->getModelo(), $this->getPlaca(), $this->getAno());
    }
}
?>
