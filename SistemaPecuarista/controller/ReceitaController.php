<?php

include_once 'dao/ReceitaDAO.php';
include_once 'model/Receita.php';

class ReceitaController {

    private $receitaDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->receitaDAO = new ReceitaDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $receita = null;
        $rotuloBotao = "Inserir";
        $clientes = $this->receitaDAO->buscar_clientes();
        include_once 'view/receita/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $clientes = $this->receitaDAO->buscar_clientes();
        $receita = $this->receitaDAO->buscar($_GET['id']);
        include_once 'view/receita/form.php';
    }
    
    public function exclusao() {
        $this->receitaDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $receita = new Receita($_POST['valor'], $_POST['descricao'], $_POST['cliente'], $_SESSION['user_id']);
        $this->receitaDAO->inserir($receita);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $receita = new Receita($_POST['valor'], $_POST['descricao'], $_POST['cliente'], $_SESSION['user_id']);
        $receita->setId($_POST['id']);
        $this->receitaDAO->alterar($receita);
        $this->form_insercao();        
    }
    
    public function listar() {
        $receitas = $this->receitaDAO->listar();
        include_once 'view/receita/listar.php';
        
    }

}
