
<div class="container" style="padding-left: 60px;">
    <form action="?classe=VacinacaoController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $vacinacao['id'] ?>">

        <label for="animal">Brinco:</label>
        <select class="browser-default" name="animal" id="animal" required>
            <option value="">Selecione o Brinco</option>
                <?php
                $selected = "";
                foreach ($animais as $animal) {
                    if ($animal[id] == $vacinacao[animal_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$animal[id]>$animal[brinco]</option>";
                }
                ?>
        </select>    

        <label for="vacina">Vacina:</label>
        <select class="browser-default" name="vacina" id="vacina" required>
            <option value="">Selecione a Vacina</option>
                <?php
                $selected = "";
                foreach ($vacinas as $vacina) {
                    if ($vacina[id] == $vacinacao[vacina_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$vacina[id]>$vacina[nome]</option>";
                }
                ?>
        </select>
        <button class="btn waves-effect waves-light" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right blue darken-1">send</i>
        </button>
    </form>
</div>