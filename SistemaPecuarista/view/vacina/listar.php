<div class="container" style="padding-left: 60px;">
<?php
    if ($vacinas != null){
?>

    <table>
    <tr><td>Nº</td><td>Nome</td><td>Descrição</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    foreach ($vacinas as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        echo "<tr><td>$numero2</td><td>$valor[nome]</td><td>$valor[descricao]</td>";
        echo "<td><a href=?classe=VacinaController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=VacinaController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Total de vacinas cadastradas: <?php echo $total; ?>
            <?php
            } ?>
</table>  
</div>

