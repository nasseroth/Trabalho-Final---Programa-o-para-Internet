<?php
class Lote {
    private $id;
    private $lote_nome;
    private $usuario;

    function __construct($lote_nome, $usuario) {
        $this->lote_nome = $lote_nome;
        $this->usuario = $usuario;
    }
    function getId() {
        return $this->id;
    }

    function getLote_nome() {
        return $this->lote_nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLote_nome($lote_nome) {
        $this->lote_nome = $lote_nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }



    
}
