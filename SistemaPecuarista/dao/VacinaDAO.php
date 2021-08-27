<?php

include_once 'dao/Conexao.php';

class VacinaDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Vacina $vacina) {
        $sql = "insert into vacina (nome, descricao, usuario_id) values ('{$vacina->getNome()}', '{$vacina->getDescricao()}', {$vacina->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from vacina where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Vacina $vacina) {
        $sql = "update vacina set nome = '{$vacina->getNome()}', descricao = '{$vacina->getDescricao()}' "
                . " where id = {$vacina->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $vacinas = array();
        $sql = "select * from vacina where usuario_id = {$_SESSION['user_id']} order by nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($vacina = pg_fetch_array($retorno)) {
            array_push($vacinas, $vacina);
        }
        return $vacinas;
    }

    public function buscar($id) {
        $sql = "select * from vacina where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
