<?php
class Receita {
    private $id;
    private $valor;
    private $descricao;
    private $cliente_id;
    private $usuario;

    function __construct($valor, $descricao, $cliente_id, $usuario) {
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->cliente_id = $cliente_id;
        $this->usuario = $usuario;
    }

    function getId() {
        return $this->id;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCliente_id() {
        return $this->cliente_id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCliente_id($cliente_id) {
        $this->cliente_id = $cliente_id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }




    
}

