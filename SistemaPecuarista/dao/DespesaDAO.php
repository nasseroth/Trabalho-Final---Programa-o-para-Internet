<?php

include_once 'dao/Conexao.php';

class DespesaDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Despesa $despesa) {
        $sql = "insert into despesa (valor, descricao, fornecedor_id, usuario_id) values ('{$despesa->getValor()}', '{$despesa->getDescricao()}', '{$despesa->getFornecedor_id()}', {$despesa->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from despesa where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Despesa $despesa) {
        $sql = "update despesa set valor = '{$despesa->getValor()}', descricao = '{$despesa->getDescricao()}', fornecedor_id = '{$despesa->getFornecedor_id()}' "
                . " where id = {$despesa->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $despesas = array();
        $sql = "select despesa.usuario_id, despesa.id, despesa.valor, despesa.descricao, despesa.data_despesa, despesa.fornecedor_id, fornecedor.fornecedor_nome from despesa join fornecedor "
                . "on despesa.usuario_id = {$_SESSION['user_id']} "
                . "and despesa.usuario_id = fornecedor.usuario_id "
                . "and despesa.fornecedor_id = fornecedor.id order by data_despesa";
        $retorno = pg_query($this->conexao, $sql);
        while ($despesa = pg_fetch_array($retorno)) {
            array_push($despesas, $despesa);
        }
        return $despesas;
    }

    public function buscar_fornecedores() {
        $fornecedors = array();
        $sql = "select * from fornecedor where usuario_id = {$_SESSION['user_id']} order by fornecedor_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($fornecedor = pg_fetch_array($retorno)) {
            array_push($fornecedors, $fornecedor);
        }
        return $fornecedors;
    }

    public function buscar($id) {
        $sql = "select * from despesa where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
