<?php

require_once 'controller/UsuarioController.php';

class MenuController {

    private $usuarioController;

    public function __construct() {
        $this->usuarioController = new UsuarioController();
    }

    public function exibeMenuGeral() {
        if ($this->usuarioController->usuarioEstaLogado()) {
            include 'view/menu.php';
        } else {
            $this->usuarioController->form_login();
        }
    }

}