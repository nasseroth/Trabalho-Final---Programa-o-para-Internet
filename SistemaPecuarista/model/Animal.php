<?php
class Animal {
    private $id;
    private $brinco;
    private $raca_id;
    private $lote_id;
    private $sexo_id;
    private $usuario;

    function __construct($brinco, $raca_id, $lote_id, $sexo_id, $usuario) {
        $this->brinco = $brinco;
        $this->raca_id = $raca_id;
        $this->lote_id = $lote_id;
        $this->sexo_id = $sexo_id;
        $this->usuario = $usuario;
    }
    
    function getId() {
        return $this->id;
    }

    function getBrinco() {
        return $this->brinco;
    }

    function getRaca_id() {
        return $this->raca_id;
    }

    function getLote_id() {
        return $this->lote_id;
    }

    function getSexo_id() {
        return $this->sexo_id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setBrinco($brinco) {
        $this->brinco = $brinco;
    }

    function setRaca_id($raca_id) {
        $this->raca_id = $raca_id;
    }

    function setLote_id($lote_id) {
        $this->lote_id = $lote_id;
    }

    function setSexo_id($sexo_id) {
        $this->sexo_id = $sexo_id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


    
}
