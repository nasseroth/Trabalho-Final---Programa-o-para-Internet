<?php

include_once 'dao/Conexao.php';

class UsuarioDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::conectar();
    }

    public function inserir($username, $password) {
        

        $sql = "insert into usuario (username, password) values "
                . "('$username', md5('$password'))";

        pg_query($this->conexao, $sql);
    }
    
    
       public function alterar($username, $password) {
        $sql = "update usuario set username='$username', password='$password'";
        pg_query($this->conexao, $sql);
    }


    public function buscar($username, $password) {
        $sql = "select * from usuario where username = '$username' and password = md5('$password')";
        $retorno = pg_query($this->conexao, $sql);
        return pg_fetch_array($retorno);
    }

}
