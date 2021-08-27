<?php
class Raca {
    private $id;
    private $nome;
    private $usuario;
    
    
    function __construct($nome, $usuario) {
        $this->nome = $nome;
        $this->usuario = $usuario;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }




    
    
}
