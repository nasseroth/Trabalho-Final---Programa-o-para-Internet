<?php
class Fornecedor {
    private $id;
    private $fornecedor_nome;
    private $telefone;
    private $email;
    private $usuario;

    function __construct($fornecedor_nome, $telefone, $email, $usuario) {
        $this->fornecedor_nome = $fornecedor_nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->usuario = $usuario;
    }

    function getId() {
        return $this->id;
    }

    function getFornecedor_nome() {
        return $this->fornecedor_nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFornecedor_nome($fornecedor_nome) {
        $this->fornecedor_nome = $fornecedor_nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }


}
