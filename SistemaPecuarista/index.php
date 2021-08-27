
<?php
session_start();
ini_set("display_errors", TRUE);
include_once './view/cabecalho.php';
include_once './controller/RacaController.php';
include_once './controller/AnimalController.php';
include_once './controller/LoteController.php';
include_once './controller/ReceitaController.php';
include_once './controller/ClienteController.php';
include_once './controller/DespesaController.php';
include_once './controller/FornecedorController.php';
include_once './controller/VacinaController.php';
include_once './controller/VacinacaoController.php';
include_once './controller/UsuarioController.php';
include_once './controller/FaturamentoController.php';
include_once './controller/DefaultController.php';
//include_once './controller/Email.php';


//require './PHPMailer/PHPMailerAutoload.php';

if(isset($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
}




if (isset($_GET['classe'])) {
    $classe = $_GET['classe'];
    $classeControler = new $classe();
    if (isset($_GET['acao'])) {
        $acao = $_GET['acao'];
        $classeControler->$acao();
    } elseif (isset($_POST['acao'])) {
        $acao = $_POST['acao'];
        $classeControler->$acao();
    }
} else {
    $classeController = new DefaultController();
}

?>

<?php
function UrlAtual(){
 $dominio= $_SERVER['HTTP_HOST'];
 $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
 return $url;
 }
if(UrlAtual() == "http://localhost/Site-Pecuarista/SistemaPecuarista/index.php?classe=FaturamentoController&acao=listar" || UrlAtual() == "http://localhost/Site-Pecuarista/SistemaPecuarista/" || UrlAtual() == "http://localhost/Site-Pecuarista/SistemaPecuarista/index.php" || UrlAtual() == "http://localhost/Site-Pecuarista/SistemaPecuarista/index.php?classe=UsuarioController&acao=form_login"){
} else {
include_once './view/rodape.php';
}
?>