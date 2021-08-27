
<div class="container" style="padding-left: 60px;">
    <form action="?classe=ReceitaController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $receita['id'] ?>">
        <strong>Valor:</strong> <input type="text"        required       name="valor"     value="<?= isset($receita['valor']) ? count($receita['valor']) : ''; ?>">
        <strong>Descrição:</strong> <input type="text"       required        name="descricao"     value="<?= isset($receita['descricao']) ? count($receita['descricao']) : ''; ?>">
        <label for="cliente">Cliente:</label>
        <select class="browser-default" name="cliente" id="cliente" required>
            <option value="">Selecione o Cliente</option>
                <?php
                $selected = "";
                foreach ($clientes as $cliente) {
                    if ($cliente[id] == $receita[cliente_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$cliente[id]>$cliente[cliente_nome]</option>";
                }
                ?>
        </select>
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>