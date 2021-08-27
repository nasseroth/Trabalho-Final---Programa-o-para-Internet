<br>
<div class="container" style="padding-left: 60px;">
    <form action="?classe=DespesaController" method="post">
        <input type="hidden" name="acao" value="<?= $acao ?>">
        <input type="hidden" name="id" value="<?= $despesa['id'] ?>">
        <strong>Valor:</strong> <input type="text"       required        name="valor"     value="<?= isset($despesa['valor']) ? count($despesa['valor']) : ''; ?>">
        <strong>Descrição:</strong> <input type="text"       required        name="descricao"     value="<?= isset($despesa['descricao']) ? count($despesa['descricao']) : ''; ?>">
        <label for="fornecedor">Fornecedor:</label>
        <select class="browser-default" name="fornecedor" id="fornecedor" required>
            <option value="">Selecione o Fornecedor</option>
                <?php
                $selected = "";
                foreach ($fornecedors as $fornecedor) {
                    if ($fornecedor[id] == $despesa[fornecedor_id]) {
                        $selected = "selected";
                    }
                    echo "<option $selected value=$fornecedor[id]>$fornecedor[fornecedor_nome]</option>";
                }
                ?>
        </select>
        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action"><?= $rotuloBotao ?>
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>