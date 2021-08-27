<div class="container" style="padding-left: 60px;">
    <?php
    if ($animals != null) {
        ?>
        
            <table class="responsive-table">
                <tr><td>Nº</td><td>Brinco</td><td>Raça</td><td>Lote</td><td>Sexo</td></tr>
                <?php
                $numero = null;
                $total = null;
                foreach ($animals as $valor) {
                    $numero = $numero + 1;
                    $total = $total + 1;
                    echo "<tr><td>$numero</td><td>$valor[brinco]</td><td>$valor[nome]</td><td>$valor[lote_nome]</td><td>$valor[sexo_nome]</td>";
                    echo "<td><a href=?classe=AnimalController&acao=form_alteracao&id=$valor[id]>Alterar</a></td>";
                    echo "<td><a href=?classe=AnimalController&acao=exclusao&id=$valor[id]>Excluir</a></td></tr>";
                }
            } else {
                
                    $total = 0;
                    echo 'Nenhum registro';
                }
                if ($total > 0) {
                    ?>
                    <tr><td>Total de animais cadastrados: <?php echo $total; ?>
                            <?php }
                        ?>
                        </table>  
            </div>
                
