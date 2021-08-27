<?php

include_once 'dao/LoteDAO.php';
include_once 'model/Lote.php';

class LoteController {

    private $loteDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->loteDAO = new LoteDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $lote = null;
        $rotuloBotao = "Inserir";
        include_once 'view/lote/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $lote = $this->loteDAO->buscar($_GET['id']);
        include_once 'view/lote/form.php';
    }
    
    public function exclusao() {
        $this->loteDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $lote = new Lote($_POST['lote_nome'], $_SESSION['user_id']);
        $this->loteDAO->inserir($lote);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $lote = new Lote($_POST['lote_nome'], $_SESSION['user_id']);
        $lote->setId($_POST['id']);
        $this->loteDAO->alterar($lote);
        $this->form_insercao();        
    }
    
    public function listar() {
        $lotes = $this->loteDAO->listar();
        include_once 'view/lote/listar.php';
        
    }

}
