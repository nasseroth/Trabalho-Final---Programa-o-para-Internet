<div class="container" style="padding-left: 60px;">
<?php
    if ($vacinacaos != null){
?>

    <table>
    <tr><td>Nº</td><td>Animal</td><td>Vacina</td><td>Data</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    foreach ($vacinacaos as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        echo "<tr><td>$numero2</td><td>$valor[brinco]</td><td>$valor[nome]</td><td>$valor[data_vacinacao]</td>";
        echo "<td><a href=?classe=VacinacaoController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=VacinacaoController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Total de vacinacaos aplicadas: <?php echo $total; ?>
            <?php
            } ?>
</table>  
</div>
