<?php

class Conexao {
    private static $host = "localhost";
    private static $port = "5432";
    private static $user = "postgres";
    private static $password = "ifsc";
    private static $dbname = "sistemapecuarista";
    
    public static function conectar() {
        return pg_connect('host='       . Conexao::$host . 
                          ' port='       . Conexao::$port . 
                          ' user='       . Conexao::$user .
                          ' password='   . Conexao::$password .
                          ' dbname='     . Conexao::$dbname);                
                
    }                   
                
}             
    