
<body>
<div class="login-page">
  <div class="form">
    <form action="?classe=UsuarioController" method="post" class="register-form">
      <input type="hidden" name="acao" value="<?= $acao ?>">
      <input type="text" required placeholder="Email" name="email"/>
      <input type="text" required placeholder="Nome de usuário" name="username"/>
      <input type="password" required placeholder="Senha" name="password"/>
      <button>Cadastrar</button>
      <p class="message">Já é registrado? <a href="#">Faça Login</a></p>
    </form>
  </div>
</div>
    <!--
    <div class="container">
<form action="?classe=UsuarioController" method="post">
    <input type="hidden" name="acao" value="<?= $acao ?>">
    Email: <input type="email" name="email">
    Nome de usuário: <input type="text" autofocus name="username">
    Senha: <input type="password"           name="password">
    <input type="submit" class="btn btn-success" value="Cadastrar">
</form>
    </div>
    -->
<script src="http://localhost/scripts/site-pecuarista/sistemaPecuarista/teste.js"></script>