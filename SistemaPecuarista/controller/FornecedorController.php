<?php

include_once 'dao/FornecedorDAO.php';
include_once 'model/Fornecedor.php';

class FornecedorController {

    private $fornecedorDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->fornecedorDAO = new FornecedorDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $fornecedor = null;
        $rotuloBotao = "Inserir";
        include_once 'view/fornecedor/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $fornecedor = $this->fornecedorDAO->buscar($_GET['id']);
        include_once 'view/fornecedor/form.php';
    }
    
    public function exclusao() {
        $this->fornecedorDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $fornecedor = new Fornecedor($_POST['fornecedor_nome'], $_POST['telefone'], $_POST['email'], $_SESSION['user_id']);
        $this->fornecedorDAO->inserir($fornecedor);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $fornecedor = new Fornecedor($_POST['fornecedor_nome'], $_POST['telefone'], $_POST['email'], $_SESSION['user_id']);
        $fornecedor->setId($_POST['id']);
        $this->fornecedorDAO->alterar($fornecedor);
        $this->form_insercao();        
    }
    
    public function listar() {
        $fornecedors = $this->fornecedorDAO->listar();
        include_once 'view/fornecedor/listar.php';
        
    }

}
