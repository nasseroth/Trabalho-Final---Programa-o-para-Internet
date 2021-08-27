<?php

include_once 'dao/Conexao.php';

class ReceitaDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Receita $receita) {
        $sql = "insert into receita (valor, descricao, cliente_id, usuario_id) values ('{$receita->getValor()}', '{$receita->getDescricao()}', '{$receita->getCliente_id()}', {$receita->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from receita where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Receita $receita) {
        $sql = "update receita set valor = '{$receita->getValor()}', descricao = '{$receita->getDescricao()}', cliente_id = '{$receita->getCliente_id()}' "
                . " where id = {$receita->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function listar() {
        $receitas = array();
        $sql = "select receita.usuario_id, receita.id, receita.valor, receita.descricao, receita.data_receita, receita.cliente_id, cliente.id, cliente.cliente_nome from receita join cliente "
                . "on receita.usuario_id = {$_SESSION['user_id']} "
                . "and receita.usuario_id = cliente.usuario_id "
                . "and receita.cliente_id = cliente.id order by data_receita";
        $retorno = pg_query($this->conexao, $sql);
        while ($receita = pg_fetch_array($retorno)) {
            array_push($receitas, $receita);
        }
        return $receitas;
    }
    public function buscar_clientes() {
        $clientes = array();
        $sql = "select * from cliente where usuario_id = {$_SESSION['user_id']} order by cliente_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($cliente = pg_fetch_array($retorno)) {
            array_push($clientes, $cliente);
        }
        return $clientes;
    }
    public function buscar($id) {
        $sql = "select * from receita where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
