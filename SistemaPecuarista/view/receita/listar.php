<div class="container" style="padding-left: 60px;">

<?php
    if ($receitas != null){
?>

    <table>
    <tr><td>Nº</td><td>Valor</td><td>Descrição</td><td>Cliente</td><td>Data</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    $total_receita = null;
    foreach ($receitas as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        $total_receita = $total_receita + $valor['valor'];
        echo "<tr><td>$numero2</td><td>R$$valor[valor]</td><td>$valor[descricao]</td><td>$valor[cliente_nome]<td>$valor[data_receita]</td>";
        echo "<td><a href=?classe=ReceitaController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=ReceitaController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Receita total: R$<?php echo $total_receita; ?>
            <?php
            } ?>
</table>  
</div>
