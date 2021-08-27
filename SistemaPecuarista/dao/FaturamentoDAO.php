<?php

include_once 'dao/Conexao.php';

class FaturamentoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }


    public function listar_receitas() {
        $receitas = array();
        $sql = "select * from receita where usuario_id = {$_SESSION['user_id']} order by data_receita";
        $retorno = pg_query($this->conexao, $sql);
        while ($receita = pg_fetch_array($retorno)) {
            array_push($receitas, $receita);
        }
        return $receitas;
    }


    public function listar_despesas() {
        $despesas = array();
        $sql = "select * from despesa where usuario_id = {$_SESSION['user_id']} order by data_despesa";
        $retorno = pg_query($this->conexao, $sql);
        while ($despesa = pg_fetch_array($retorno)) {
            array_push($despesas, $despesa);
        }
        return $despesas;
    }
    public function buscar($id) {
        $sql = "select * from receita where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
