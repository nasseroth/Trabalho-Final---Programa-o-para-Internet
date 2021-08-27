<?php

include_once 'dao/RacaDAO.php';
include_once 'model/Raca.php';

class RacaController {

    private $racaDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->racaDAO = new RacaDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $raca = null;
        $rotuloBotao = "Inserir";
        include_once 'view/raca/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $raca = $this->racaDAO->buscar($_GET['id']);
        include_once 'view/raca/form.php';
    }
    
    public function exclusao() {
        $this->racaDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $raca = new Raca($_POST['nome'], $_SESSION['user_id']);
        $this->racaDAO->inserir($raca);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $raca = new Raca($_POST['nome'], $_SESSION['user_id']);
        $raca->setId($_POST['id']);
        $this->racaDAO->alterar($raca);
        $this->form_insercao();        
    }
    
    public function listar() {
        $racas = $this->racaDAO->listar();
        include_once 'view/raca/listar.php';
        
    }

}
