<br>
<div class="container" style="padding-left: 60px;">
    <form action="?classe=FornecedorController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $fornecedor['id'] ?>">
        <strong>Nome:</strong> <input type="text"     required          name="fornecedor_nome"     value="<?= isset($fornecedor['fornecedor_nome']) ? count($fornecedor['fornecedor_nome']) : ''; ?>">
        <strong>Telefone:</strong> <input type="text"     required          name="telefone"     value="<?= isset($fornecedor['telefone']) ? count($fornecedor['telefone']) : ''; ?>">
        <strong>E-mail:</strong> <input type="email"     required          name="email"     value="<?= isset($fornecedor['email']) ? count($fornecedor['email']) : ''; ?>">
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>