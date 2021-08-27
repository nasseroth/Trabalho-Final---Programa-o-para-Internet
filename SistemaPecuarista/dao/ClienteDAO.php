<?php

include_once 'dao/Conexao.php';

class ClienteDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Cliente $cliente) {
        $sql = "insert into cliente (cliente_nome, telefone, email, usuario_id) values ('{$cliente->getCliente_nome()}', '{$cliente->getTelefone()}', '{$cliente->getEmail()}', {$cliente->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from cliente where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Cliente $cliente) {
        $sql = "update cliente set cliente_nome = '{$cliente->getCliente_nome()}', telefone = '{$cliente->getTelefone()}', email = '{$cliente->getEmail()}' "
                . " where id = {$cliente->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $clientes = array();
        $sql = "select * from cliente where usuario_id = {$_SESSION['user_id']} order by cliente_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($cliente = pg_fetch_array($retorno)) {
            array_push($clientes, $cliente);
        }
        return $clientes;
    }

    public function buscar($id) {
        $sql = "select * from cliente where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
