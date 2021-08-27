<br>
<div class="container" style="padding-left: 60px;">
    <form action="?classe=ClienteController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
        <strong>Nome:</strong> <input type="text"     required          name="cliente_nome"     value="<?= isset($cliente['cliente_nome']) ? count($cliente['cliente_nome']) : ''; ?>">
        <strong>Telefone:</strong> <input type="text"     required          name="telefone"     value="<?= isset($cliente['telefone']) ? count($cliente['telefone']) : ''; ?>">
        <strong>E-mail:</strong> <input type="email"     required          name="email"     value="<?= isset($cliente['email']) ? count($cliente['email']) : ''; ?>">
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>