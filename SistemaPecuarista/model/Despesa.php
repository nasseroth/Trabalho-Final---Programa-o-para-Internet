<?php
class Despesa {
    private $id;
    private $valor;
    private $descricao;
    private $fornecedor_id;
    private $usuario;

    function __construct($valor, $descricao, $fornecedor_id, $usuario) {
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->fornecedor_id = $fornecedor_id;
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

    function getFornecedor_id() {
        return $this->fornecedor_id;
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

    function setFornecedor_id($fornecedor_id) {
        $this->fornecedor_id = $fornecedor_id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


    
}

