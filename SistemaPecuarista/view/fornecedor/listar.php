<div class="container" style="padding-left: 60px;">
<?php
    if ($fornecedors != null){
?>

    <table>
    <tr><td>Nº</td><td>Nome</td><td>Telefone</td><td>Email</td></tr>
    <?php
    $numero2 = null;
    $total = null;
    foreach ($fornecedors as $valor) {
        $numero2 = $numero2 + 1;
        $total = $total + 1;
        echo "<tr><td>$numero2</td><td>$valor[fornecedor_nome]</td><td>$valor[telefone]</td><td>$valor[email]</td>";
        echo "<td><a href=?classe=FornecedorController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
        echo "<td><a href=?classe=FornecedorController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
    }
    } else {
        
        $total = 0;
        echo 'Nenhum registro';
    }
    if($total > 0){ ?>
    <tr><td>Total de fornecedores cadastrados: <?php echo $total; ?>
            <?php
            } ?>
</table>  
    </div>
