<?php

include_once 'dao/ClienteDAO.php';
include_once 'model/Cliente.php';

class ClienteController {

    private $clienteDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->clienteDAO = new ClienteDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $cliente = null;
        $rotuloBotao = "Inserir";
        include_once 'view/cliente/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $cliente = $this->clienteDAO->buscar($_GET['id']);
        include_once 'view/cliente/form.php';
    }
    
    public function exclusao() {
        $this->clienteDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $cliente = new Cliente($_POST['cliente_nome'], $_POST['telefone'], $_POST['email'], $_SESSION['user_id']);
        $this->clienteDAO->inserir($cliente);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $cliente = new Cliente($_POST['cliente_nome'], $_POST['telefone'], $_POST['email'], $_SESSION['user_id']);
        $cliente->setId($_POST['id']);
        $this->clienteDAO->alterar($cliente);
        $this->form_insercao();        
    }
    
    public function listar() {
        $clientes = $this->clienteDAO->listar();
        include_once 'view/cliente/listar.php';
        
    }

}
