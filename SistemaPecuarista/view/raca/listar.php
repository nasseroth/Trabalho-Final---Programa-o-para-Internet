<div class="container" style="padding-left: 60px;">

    <?php
    if ($racas != null) {
        ?>

        <table class="responsive-table">
            <tr><td>Nº</td><td>Nome</td></tr>
            <?php
            $numero = null;
            $total = null;
            foreach ($racas as $valor) {
                $numero = $numero + 1;
                $total = $total + 1;
                echo "<tr><td>$numero</td><td>$valor[nome]</td>";
                echo "<td><a href=?classe=RacaController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
                echo "<td><a href=?classe=RacaController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
            }
        } else {
            $total = 0;
            echo 'Nenhum registro';
        }
        if ($total > 0) {
            ?>
            <tr><td>Total de raças cadastradas: <?php echo $total; ?>
                <?php }
                ?>
    </table>  
</div>


