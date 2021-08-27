<div class="container" style="padding-left: 60px;">
<?php
    if ($lotes != null){
?>
    
    <table class="responsive-table">
    <tr><td>Nº</td><td>Nome</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    foreach ($lotes as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        echo "<tr><td>$numero2</td><td>$valor[lote_nome]</td>";
        echo "<td><a href=?classe=LoteController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=LoteController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Total de lotes cadastrados: <?php echo $total; ?>
            <?php
            } ?>
</table>  
</div>

