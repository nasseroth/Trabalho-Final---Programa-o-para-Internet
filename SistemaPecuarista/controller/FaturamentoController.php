<?php

include_once 'dao/FaturamentoDAO.php';
//include_once 'model/Faturamento.php';

class FaturamentoController {

    private $faturamentoDAO;

    
    public function __construct() {
        //(new UsuarioController())->validaUsuario();
        (new MenuController())->exibeMenuGeral();
        $this->faturamentoDAO = new FaturamentoDAO();
    }

    
    public function listar() {
        $receitas = $this->faturamentoDAO->listar_receitas();
        $despesas = $this->faturamentoDAO->listar_despesas();
        include_once 'view/faturamento/listar.php';
        
    }

}
