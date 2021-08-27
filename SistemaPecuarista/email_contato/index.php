
<?php 
include "funcao.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'nothman09@gmail.com', $_POST['mensagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="UTF-8">
	<title>Sistema Pecuarista - Formulário de Contato</title>
	
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <h2>Formulário de contato - <a href="../index.php">Voltar ao sistema</a></h2>
	
    <form method="post" id="formulario_contato" onsubmit="validaForm(); return false;" class="form">
		<p class="name">
            <label for="name">* Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
		</p>
		
		<p class="email">
            <label for="email">* E-mail</label>
            <input type="text" name="email" id="email" placeholder="mail@exemplo.com.br" />
		</p>		
	
		<p class="text">
            <label for="mensagem">* Mensagem</label>
            <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" /></textarea>
		</p>
                <!-- sistema de reCaptcha ainda não funcional pois necessita ter um dominio ativo -->
		<!-- <div class="g-recaptcha" data-sitekey="6LespE0UAAAAAM6hzqiv5Ia-H6IHHgw97yaoOGA7"></div> -->
		<p class="submit">
            <input type="submit" value="Enviar" />
		</p>
	</form>
    <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#email').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo E-mail');erro = true;
            }
            if($('#mensagem').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Mensagem');erro = true;
            }
            
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>
</body>
</html>