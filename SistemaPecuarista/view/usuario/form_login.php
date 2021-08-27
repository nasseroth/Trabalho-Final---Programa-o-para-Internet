
<!DOCTYPE html>
<html lang="en">
<head>


  <link rel="stylesheet" type="text/css" href="teste.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/scripts/site-pecuarista/sistemaPecuarista/teste.css">
  

</head>
<body>
    
<div class="login-page">
  <div class="form">
      <h3>LOGIN</h3>
      <p style="font-size:11px;">* Esta página é de Acesso Restrito.</p>
    <form action="?classe=UsuarioController" method="post" class="login-form">
      <input type="hidden" name="acao" value="<?= $acao ?>">
      <input type="text" placeholder="Nome de usuário" required name="username"/>
      <input type="password" placeholder="Senha" required name="password"/>
      <button>Entrar</button>
      <!--<p class="message">Não é registrado? <a href="?classe=UsuarioController&acao=form_insercao" role="button">Crie um conta</a></p> -->
    </form>
  </div>
</div>


<!--
    <div class="container">
<form action="?classe=UsuarioController" method="post">
    <input type="hidden" name="acao" value="<?= $acao ?>">
    Nome de usuário: <input type="text" autofocus name="username">
    Senha: <input type="password"           name="password">
    <input type="submit" class="btn btn-success" value="Entrar">
</form>



    <a href="?classe=UsuarioController&acao=form_insercao" class="btn btn-info" role="button">Criar Conta</a>
    </div>
-->
