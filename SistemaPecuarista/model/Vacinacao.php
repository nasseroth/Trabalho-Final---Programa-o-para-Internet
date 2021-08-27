<?php
class Vacinacao {
    private $id;
    private $animal_id;
    private $vacina_id;
    private $usuario;

    function __construct($animal_id, $vacina_id, $usuario) {
        $this->animal_id = $animal_id;
        $this->vacina_id = $vacina_id;
        $this->usuario = $usuario;
    }
    function getId() {
        return $this->id;
    }

    function getAnimal_id() {
        return $this->animal_id;
    }

    function getVacina_id() {
        return $this->vacina_id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAnimal_id($animal_id) {
        $this->animal_id = $animal_id;
    }

    function setVacina_id($vacina_id) {
        $this->vacina_id = $vacina_id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }





}
