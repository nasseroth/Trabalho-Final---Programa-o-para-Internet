<div class="container" style="padding-left: 60px;">
<?php
    if ($despesas != null){
?>

    <table>
    <tr><td>Nº</td><td>Valor</td><td>Descrição</td><td>Fornecedor</td><td>Data</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    $total_despesa = null;
    foreach ($despesas as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        $total_despesa = $total_despesa + $valor['valor'];
        echo "<tr><td>$numero2</td><td>R$$valor[valor]</td><td>$valor[descricao]</td><td>$valor[fornecedor_nome]</td><td>$valor[data_despesa]</td>";
        echo "<td><a href=?classe=DespesaController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=DespesaController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Despesa total: R$<?php echo $total_despesa; ?>
            <?php
            } ?>
</table>  
</div>
