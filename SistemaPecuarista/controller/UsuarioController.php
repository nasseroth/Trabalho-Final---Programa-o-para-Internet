<?php

include_once 'dao/UsuarioDAO.php';
class UsuarioController {

    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
        
        $_SESSION["mensagem"] = "";
    }
    
    
    public function form_insercao() {
        $acao = 'insercao';
        $rotuloBotao = "Registrar";
        include_once 'view/usuario/cadastrar.php';
    }
    
    public function insercao() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $endereco = $_POST['email'];
        $usuario = $this->usuarioDAO->buscar($username, $password);
        if ($usuario == null) {
        $this->usuarioDAO->inserir($username, $password);
        $email = new Email();
        $email->enviarEmail($endereco, "Cadastro", "Obrigado por Cadastrar-se!");
        header("Location: index.php");
        } else {
            echo "Usuário já existe";
        }
    }


    public function form_login() {
        $acao = 'login';
        include_once 'view/usuario/form_login.php';
    }
    
    public function login() {
        $usuario = $this->usuarioDAO->buscar($_POST['username'], $_POST['password']);
        if ($usuario == null){
             $_SESSION["mensagem"] = "<b><font color=\"#FF0000\"> <strong>Usuário ou senha incorretos </strong></font></b>!" ;
             header("Location:  ?classe=UsuarioController&acao=form_login");
        } else {
            $this->logar($_POST['username'], $usuario['id']);
            header("Location: index.php");
        }        
    }
        
    public function logar($username, $id){
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $id;
        $this->iniciaTempoSessao();
        
    }
    
    public function usuarioLogado() {
        return $_SESSION['username']; 
       
    }    
    
    public function deslogar(){
        session_destroy();
        header("Location:  index.php");
    }
    
    public function usuarioEstaLogado() {
        return isset($_SESSION['username']);
    }
    
     public function sessaoExpirada() {
        if ($_SESSION['tempo'] < time()) {
            $this->deslogar();
            return TRUE;
        } else {
            $this->iniciaTempoSessao();
            return false;
        }
    }

    public function iniciaTempoSessao() {
        $_SESSION['tempo'] = time() + 10000;
    }
    
 public function validaUsuario() {
        if (!$this->usuarioEstaLogado() or $this->sessaoExpirada()) {
            $_SESSION["mensagem"] = "Voce nao tem acesso";
            header("Location:  index.php");
        } else {
            $_SESSION["mensagem"] = "ok";
        }
    }

}
