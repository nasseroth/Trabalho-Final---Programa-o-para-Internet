<?php

include_once 'dao/AnimalDAO.php';
include_once 'model/Animal.php';


class AnimalController {

    private $animalDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->animalDAO = new AnimalDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $animal = null;
        $rotuloBotao = "Inserir";
        $racas = $this->animalDAO->buscar_racas();
        $lotes = $this->animalDAO->buscar_lotes();
        $sexos = $this->animalDAO->buscar_sexos();
        include_once 'view/animal/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $racas = $this->animalDAO->buscar_racas();
        $lotes = $this->animalDAO->buscar_lotes();
        $sexos = $this->animalDAO->buscar_sexos();
        $animal = $this->animalDAO->buscar($_GET['id']);
        include_once 'view/animal/form.php';
    }
    
    public function exclusao() {
        $this->animalDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $animal = new Animal($_POST['brinco'], $_POST['raca'], $_POST['lote'], $_POST['sexo'], $_SESSION['user_id']);
        $this->animalDAO->inserir($animal);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $animal = new Animal($_POST['brinco'], $_POST['raca'], $_POST['lote'], $_POST['sexo'], $_SESSION['user_id']);
        $animal->setId($_POST['id']);
        $this->animalDAO->alterar($animal);
        $this->form_insercao();        
    }
    
    public function listar() {
        $animals = $this->animalDAO->listar();
        include_once 'view/animal/listar.php';
        
    }

}
