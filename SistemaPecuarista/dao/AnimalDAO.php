<?php

include_once 'dao/Conexao.php';

class AnimalDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Animal $animal) {
        $sql = "insert into animal (brinco, raca_id, lote_id, sexo_id, usuario_id) values ('{$animal->getBrinco()}','{$animal->getRaca_id()}','{$animal->getLote_id()}', '{$animal->getSexo_id()}', {$animal->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from animal where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Animal $animal) {
        $sql = "update animal set brinco = '{$animal->getBrinco()}', raca_id = '{$animal->getRaca_id()}', lote_id = '{$animal->getLote_id()}', sexo_id = '{$animal->getSexo_id()}' "
                . " where id = {$animal->getId()}";
        pg_query($this->conexao, $sql);
    }

    public function buscar_lotes() {
        $lotes = array();
        $sql = "select * from lote where usuario_id = {$_SESSION['user_id']} order by lote_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($lote = pg_fetch_array($retorno)) {
            array_push($lotes, $lote);
        }
        return $lotes;
    }

    public function buscar_racas() {
        $racas = array();
        $sql = "select * from raca where usuario_id = {$_SESSION['user_id']} order by nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($raca = pg_fetch_array($retorno)) {
            array_push($racas, $raca);
        }
        return $racas;
    }

    public function buscar_sexos() {
        $sexos = array();
        $sql = "select * from sexo";
        $retorno = pg_query($this->conexao, $sql);
        while ($sexo = pg_fetch_array($retorno)) {
            array_push($sexos, $sexo);
        }
        return $sexos;
    }

    public function listar() {
        $animals = array();
        $sql = "select animal.id, animal.brinco, animal.raca_id, lote.lote_nome, raca.nome, sexo.id, sexo.sexo_nome from animal join lote on animal.usuario_id = {$_SESSION['user_id']} "
                . "inner join raca on raca.usuario_id = {$_SESSION['user_id']} "
                . "inner join sexo on sexo.id = animal.sexo_id "
                . "and lote.usuario_id = {$_SESSION['user_id']} "
                . "and animal.lote_id = lote.id "
                . "and animal.raca_id = raca.id "
                . "and animal.sexo_id = sexo.id order by lote_nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($animal = pg_fetch_array($retorno)) {
            array_push($animals, $animal);
        }
        return $animals;
    }

    public function buscar($id) {
        $sql = "select * from animal where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
