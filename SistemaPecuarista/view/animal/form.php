<br>
<body>
    <div class="container" style="padding-left: 60px;" >

        <form action="?classe=AnimalController" method="post">
            <input type="hidden" name="acao" value="<?= $acao ?>">
            <input type="hidden" name="id" value="<?= $animal['id'] ?>">
            <strong>Brinco:</strong> <input type="text" required name="brinco"     value="<?= isset($animal['brinco']) ? count($animal['brinco']) : 0; ?>">
            <label for="raca">Raça:</label>
            <select name="raca" class="browser-default">
                <option value="" disabled selected>Selecione a Raça</option>
                <?php
                $selected = "";
                foreach ($racas as $raca) {
                    if ($raca[id] == $animal[raca_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$raca[id]>$raca[nome]</option>";
                }
                ?>
            </select>

            <label for="lote">Lote:</label>
            <select name="lote" class="browser-default" id="lote" required>
                <option value="">Selecione o Lote</option>
                <?php
                $selected = "";
                foreach ($lotes as $lote) {
                    if ($lote[id] == $animal[lote_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$lote[id]>$lote[lote_nome]</option>";
                }
                ?>
            </select>
            <label for="sexo">Sexo:</label>
            <select class="browser-default" name="sexo" id="sexo" required>
                <option value="">Selecione o Sexo</option>
                <?php
                $selected = "";
                foreach ($sexos as $sexo) {
                    if ($sexo[id] == $animal[sexo_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$sexo[id]>$sexo[sexo_nome]</option>";
                }
                ?>
            </select>
            <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
                <i class="material-icons right">send</i>
            </button>
                      <!-- <input type="submit" class="btn btn-success" value="<?= $rotuloBotao ?>"> -->
        </form>
    </div>