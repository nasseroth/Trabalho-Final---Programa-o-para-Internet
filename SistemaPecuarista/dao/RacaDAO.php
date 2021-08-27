<?php

include_once 'dao/Conexao.php';

class RacaDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Raca $raca) {
        $sql = "insert into raca (nome, usuario_id) values ('{$raca->getNome()}', {$raca->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from raca where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Raca $raca) {
        $sql = "update raca set nome = '{$raca->getNome()}' "
                . " where id = {$raca->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $racas = array();
        $sql = "select * from raca where usuario_id = {$_SESSION['user_id']} order by nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($raca = pg_fetch_array($retorno)) {
            array_push($racas, $raca);
        }
        return $racas;
    }

    public function buscar($id) {
        $sql = "select * from raca where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
