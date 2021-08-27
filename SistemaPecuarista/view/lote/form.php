<br>
<div class="container" style="padding-left: 60px;">
    <form action="?classe=LoteController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $lote['id'] ?>">
        <strong>Nome:</strong> <input type="text"     required          name="lote_nome"     value="<?= isset($lote['lote_nome']) ? count($lote['lote_nome']) : ''; ?>">
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>