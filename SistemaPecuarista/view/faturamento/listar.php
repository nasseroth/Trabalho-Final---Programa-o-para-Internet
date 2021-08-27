<div class="container" style="padding-left: 60px;">
    <div style="float:right;">
        <h4> RECEITAS </h4>
        <?php
        if ($receitas != null) {
            ?>

            <div style="float:right;">

                <table class="responsive-table">
                    <tr><td>Nº</td><td>Valor</td><td>Descrição</td><td>Data</td></tr>
                    <?php
                    $numero2 = null;
                    $total = null;
                    $total_receita = null;
                    foreach ($receitas as $valor) {
                        $numero2 = $numero2 + 1;
                        $total = $total + 1;
                        $total_receita = $total_receita + $valor['valor'];
                        echo "<tr><td>$numero2</td><td>R$$valor[valor]</td><td>$valor[descricao]</td><td>$valor[data_receita]</td>";
                    }
                } else {

                    $total = 0;
                    echo 'Nenhum registro';
                }
                if ($total > 0) {
                    ?>
                    <tr ><td>Receita total: R$<?php echo $total_receita; ?>
                            <?php }
                        ?>
            </table>  
        </div>
    </div>
    <div style="float:left;">
        <h4> DESPESAS </h4>
        <?php
        if ($despesas != null) {
            ?>
            <div style="float:left;" >
                <table>
                    <tr><td>Despesa Nº</td><td>Valor</td><td>Descrição</td><td>Data</td></tr>
                    <?php
                    $numero2 = null;
                    $total = null;
                    $total_despesa = null;
                    foreach ($despesas as $valor) {
                        $numero2 = $numero2 + 1;
                        $total = $total + 1;
                        $total_despesa = $total_despesa + $valor['valor'];
                        echo "<tr><td>$numero2</td><td>R$$valor[valor]</td><td>$valor[descricao]</td><td>$valor[data_despesa]</td>";
                    }
                } else {

                    $total = 0;
                    echo 'Nenhum registro';
                }
                if ($total > 0) {
                    ?>
                    <tr><td>Despesa total: R$<?php echo $total_despesa; ?>
    <?php }
?>
            </table>  
        </div></div></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages': ['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Despesa', <?php echo $total_despesa; ?>],
            ['Receita', <?php echo $total_receita; ?>]
        ]);

        // Set chart options
        var options = {'title': 'Despesas/Receitas em forma de gráfico',
            colors: ['#FF0000','#4286f4'],
                    'width': 700,
            'height': 600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<center><div id="chart_div" style="width: 100%; bottom: 0;"></div></center>
