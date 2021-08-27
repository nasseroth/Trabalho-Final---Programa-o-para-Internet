<div class="container" style="padding-left: 60px;">
<?php
    if ($clientes != null){
?>

    <table>
    <tr><td>Nº</td><td>Nome</td><td>Telefone</td><td>Email</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    foreach ($clientes as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        echo "<tr><td>$numero2</td><td>$valor[cliente_nome]</td><td>$valor[telefone]</td><td>$valor[email]</td>";
        echo "<td><a href=?classe=ClienteController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=ClienteController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Total de clientes cadastrados: <?php echo $total; ?>
            <?php
            } ?>
</table>  
</div>

