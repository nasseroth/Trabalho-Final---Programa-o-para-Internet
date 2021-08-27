<?php

include_once 'dao/VacinaDAO.php';
include_once 'model/Vacina.php';

class VacinaController {

    private $vacinaDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->vacinaDAO = new VacinaDAO();
    }
    
    public function form_insercao() {
        $acao = 'insercao';
        $vacina = null;
        $rotuloBotao = "Inserir";
        include_once 'view/vacina/form.php';
        $this->listar();
    }
    
    public function form_alteracao() {
        $acao = 'alteracao';
        $rotuloBotao = "Alterar";
        $vacina = $this->vacinaDAO->buscar($_GET['id']);
        include_once 'view/vacina/form.php';
    }
    
    public function exclusao() {
        $this->vacinaDAO->excluir($_GET['id']);
        $this->form_insercao();
       
    }
    
    public function insercao() {
        $vacina = new Vacina($_POST['nome'], $_POST['descricao'], $_SESSION['user_id']);
        $this->vacinaDAO->inserir($vacina);
        $this->form_insercao();     
        
    }
    
    public function alteracao() {
        $vacina = new Vacina($_POST['nome'], $_POST['descricao'], $_SESSION['user_id']);
        $vacina->setId($_POST['id']);
        $this->vacinaDAO->alterar($vacina);
        $this->form_insercao();        
    }
    
    public function listar() {
        $vacinas = $this->vacinaDAO->listar();
        include_once 'view/vacina/listar.php';
        
    }

}
