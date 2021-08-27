<?php

include_once 'dao/VacinacaoDAO.php';
include_once 'model/Vacinacao.php';

class VacinacaoController {

    private $vacinacaoDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->vacinacaoDAO = new VacinacaoDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $vacinacao = null;
        $rotuloBotao = "Inserir";
        $vacinas = $this->vacinacaoDAO->buscar_vacinas();
        $animais = $this->vacinacaoDAO->buscar_animais();
        include_once 'view/vacinacao/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $vacinas = $this->vacinacaoDAO->buscar_vacinas();
        $animais = $this->vacinacaoDAO->buscar_animais();
        $vacinacao = $this->vacinacaoDAO->buscar($_GET['id']);
        include_once 'view/vacinacao/form.php';
    }
    
    public function exclusao() {
        $this->vacinacaoDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $vacinacao = new Vacinacao($_POST['animal'], $_POST['vacina'], $_SESSION['user_id']);
        $this->vacinacaoDAO->inserir($vacinacao);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $vacinacao = new Vacinacao($_POST['animal'], $_POST['vacina'], $_SESSION['user_id']);
        $vacinacao->setId($_POST['id']);
        $this->vacinacaoDAO->alterar($vacinacao);
        $this->form_insercao();        
    }
    
    public function listar() {
        $vacinacaos = $this->vacinacaoDAO->listar();
        include_once 'view/vacinacao/listar.php';
        
    }

}
