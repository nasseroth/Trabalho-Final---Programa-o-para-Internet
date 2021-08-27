<?php
class Cliente {
    private $id;
    private $cliente_nome;
    private $telefone;
    private $email;
    private $usuario;

    function __construct($cliente_nome, $telefone, $email, $usuario) {
        $this->cliente_nome = $cliente_nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->usuario = $usuario;
    }

    function getId() {
        return $this->id;
    }

    function getCliente_nome() {
        return $this->cliente_nome;
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

    function setCliente_nome($cliente_nome) {
        $this->cliente_nome = $cliente_nome;
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
