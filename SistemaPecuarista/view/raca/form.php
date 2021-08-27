
<div class="container" style="padding-left: 60px;">
    <form action="?classe=RacaController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $raca['id'] ?>">
        <strong>Nome:</strong> <input type="text"     required          name="nome"     value="<?= isset($raca['nome']) ? count($raca['nome']) : ''; ?>">
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>

</div>


