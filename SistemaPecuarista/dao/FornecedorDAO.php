<?php

include_once 'dao/Conexao.php';

class FornecedorDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Fornecedor $fornecedor) {
        $sql = "insert into fornecedor (fornecedor_nome, telefone, email, usuario_id) values ('{$fornecedor->getFornecedor_nome()}', '{$fornecedor->getTelefone()}', '{$fornecedor->getEmail()}', {$fornecedor->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from fornecedor where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Fornecedor $fornecedor) {
        $sql = "update fornecedor set fornecedor_nome = '{$fornecedor->getFornecedor_nome()}', telefone = '{$fornecedor->getTelefone()}', email = '{$fornecedor->getEmail()}' "
                . " where id = {$fornecedor->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $fornecedors = array();
        $sql = "select * from fornecedor where usuario_id = {$_SESSION['user_id']} order by fornecedor_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($fornecedor = pg_fetch_array($retorno)) {
            array_push($fornecedors, $fornecedor);
        }
        return $fornecedors;
    }

    public function buscar($id) {
        $sql = "select * from fornecedor where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
