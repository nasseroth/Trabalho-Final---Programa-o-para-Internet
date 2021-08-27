<?php

include_once 'dao/Conexao.php';

class VacinacaoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir(Vacinacao $vacinacao) {
        $sql = "insert into vacinacao (animal_id, vacina_id, usuario_id) values ('{$vacinacao->getAnimal_id()}','{$vacinacao->getVacina_id()}',{$vacinacao->getUsuario()})";
        pg_query($this->conexao, $sql);
    }

    public function excluir($id) {
        $sql = "delete from vacinacao where id = $id";
        pg_query($this->conexao, $sql);
    }

    public function alterar(Vacinacao $vacinacao) {
        $sql = "update vacinacao set animal_id = '{$vacinacao->getAnimal_id()}', vacina_id = '{$vacinacao->getVacina_id()}' "
                . " where id = {$vacinacao->getId()}";
        pg_query($this->conexao, $sql);
    }
    
    public function buscar_vacinas() {
        $lotes = array();
        $sql = "select * from vacina where usuario_id = {$_SESSION['user_id']} order by nome";
        $retorno = pg_query($this->conexao, $sql);
        while ($lote = pg_fetch_array($retorno)) {
            array_push($lotes, $lote);
        }
        return $lotes;
    }
    
    public function buscar_animais() {
        $lotes = array();
        $sql = "select * from animal where usuario_id = {$_SESSION['user_id']} order by brinco";
        $retorno = pg_query($this->conexao, $sql);
        while ($lote = pg_fetch_array($retorno)) {
            array_push($lotes, $lote);
        }
        return $lotes;
    }
    public function listar() {
        $vacinacaos = array();
        $sql = "select vacinacao.id, animal.brinco, vacina.nome, vacinacao.data_vacinacao from vacinacao join animal on vacinacao.usuario_id = {$_SESSION['user_id']}"
                . " inner join vacina on vacina.id = vacinacao.vacina_id"
                . " and animal.id = vacinacao.animal_id"
                . " and vacinacao.usuario_id = {$_SESSION['user_id']}"
                . " and animal.usuario_id = {$_SESSION['user_id']}";
        $retorno = pg_query($this->conexao, $sql);
        while ($vacinacao = pg_fetch_array($retorno)) {
            array_push($vacinacaos, $vacinacao);
        }
        return $vacinacaos;
    }

    public function buscar($id) {
        $sql = "select * from vacinacao where id = $id";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
