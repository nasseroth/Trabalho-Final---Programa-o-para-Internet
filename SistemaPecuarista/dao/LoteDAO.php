<?php

include_once 'dao/Conexao.php';

class LoteDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Lote $lote) {
        $sql = "insert into lote (lote_nome, usuario_id) values ('{$lote->getLote_nome()}', {$lote->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from lote where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Lote $lote) {
        $sql = "update lote set lote_nome = '{$lote->getLote_nome()}' "
                . " where id = {$lote->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $lotes = array();
        $sql = "select * from lote where usuario_id = {$_SESSION['user_id']} order by lote_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($lote = pg_fetch_array($retorno)) {
            array_push($lotes, $lote);
        }
        return $lotes;
    }

    public function buscar($id) {
        $sql = "select * from lote where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
