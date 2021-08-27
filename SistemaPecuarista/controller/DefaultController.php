<?php
require_once 'controller/MenuController.php';


class DefaultController {
    
    private $MenuController;
    
    public function __construct() {
        $this->MenuController = new MenuController();    
        $this->MenuController->exibeMenuGeral();
    }
    
    
}