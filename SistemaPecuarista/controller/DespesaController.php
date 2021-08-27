<?php

include_once 'dao/DespesaDAO.php';
include_once 'model/Despesa.php';

class DespesaController {

    private $despesaDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->despesaDAO = new DespesaDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $despesa = null;
        $rotuloBotao = "Inserir";
        $fornecedors = $this->despesaDAO->buscar_fornecedores();
        include_once 'view/despesa/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $despesa = $this->despesaDAO->buscar($_GET['id']);
        $fornecedors = $this->despesaDAO->buscar_fornecedores();
        include_once 'view/despesa/form.php';
    }
    
    public function exclusao() {
        $this->despesaDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $despesa = new Despesa($_POST['valor'], $_POST['descricao'], $_POST['fornecedor'], $_SESSION['user_id']);
        $this->despesaDAO->inserir($despesa);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $despesa = new Despesa($_POST['valor'], $_POST['descricao'], $_POST['fornecedor'], $_SESSION['user_id']);
        $despesa->setId($_POST['id']);
        $this->despesaDAO->alterar($despesa);
        $this->form_insercao();        
    }
    
    public function listar() {
        $despesas = $this->despesaDAO->listar();
        include_once 'view/despesa/listar.php';
        
    }

}
