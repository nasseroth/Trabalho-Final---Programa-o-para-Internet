<br>
<div class="container" style="padding-left: 60px;">
    <form action="?classe=VacinaController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $vacina['id'] ?>">
        <strong>Nome:</strong> <input type="text"        required       name="nome"     value="<?= isset($vacina['nome']) ? count($vacina['nome']) : ''; ?>">
        <strong>Descrição:</strong> <input type="text"     required          name="descricao"     value="<?= isset($vacina['descricao']) ? count($vacina['descricao']) : ''; ?>">
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>