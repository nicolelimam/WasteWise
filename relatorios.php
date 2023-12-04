<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="rel.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Relatórios</title>

    <style>

        div #columnchart {
            color: white;
            width: 600px; 
            height: 520px;
            margin-top: 5rem;
            margin-right: 1rem;
        }
    </style>

<!-- CODIGO DE BARRAS -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawBarChart);

    function drawBarChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Data');
        data.addColumn('number', 'Volume em litros');
        data.addColumn({type: 'string', role: 'style'});

        <?php
        $conn = new mysqli("localhost", "root", "", "WastWise");
        $sql = "SELECT * FROM DadosArduino WHERE idMinhasLixeiras = 1";
        $buscar = mysqli_query($conn, $sql);

        while ($dados = mysqli_fetch_array($buscar)) {
            $volume = $dados['volume'];
            $date = $dados['date'];
        ?>
            // Use cores consistentes com o gráfico de pizza
            data.addRow(["<?php echo $date ?>", <?php echo $volume ?>, "#628A4C"]);
        <?php } ?>

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                        { calc: "stringify",
                          sourceColumn: 1,
                          type: "string",
                          role: "annotation" },
                        2]);

            var options = {
            title: "Como você tem usado sua lixeira recentemente...",
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
            colors: ['#628A4C'],
            backgroundColor: 'transparent', // Cor de fundo transparente
            titleTextStyle: {
                fontSize: 16,
                color: '#628A4C',
            },
            vAxis: {
                textStyle: {
                    fontSize: 16,
                    color: '#628A4C',
                },
            },
            hAxis: {
                textStyle: {
                    fontSize: 12,
                    color: '#628A4C',
                },
            },
        };

        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
        chart.draw(view, options);
    }
</script>

    </head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <ul class="navbar">
            <li><a href="homeproprietario.php">Minhas lixeiras</a></li>
            <li><a href="confprod.php">Adquirir nova lixeira</a></li>
        </ul>

        <div class="main">
        <a href="meuperfil.php" id="usericon"><div class="iconuser">
            </div></a>
            <button id="btnTheme">Ok</button>
            <a href="index.php"><i class="ri-logout-circle-r-line" id="btn-logout"></i></a>
            <i class="ri-menu-line" id="menu-icon"></i>
        </div>
    </header>
    <!--Chamando o codigo js-->
    <script src="mudartema.js"></script>
    <main>
        <div class="titulopag">
          <h2>RELATÓRIO DE USO</h2>
        </div>
        <div class="graficos">
        <div class="tabela-relatorio">
          <h3>Lixeiras adquiridas</h3>
          <table id="tabelaDados">
              <thead>
                  <tr>
                      <th class="th1">Modelo</th>
                      <th>Capacidade</th>
                  </tr>
              </thead>
              <tbody>
              <?php
                $sql = "SELECT Lixeira.modelo, Lixeira.capacidade
                        FROM Lixeira
                        JOIN MinhasLixeiras ON Lixeira.codigoSerial = MinhasLixeiras.CodigoSerial
                        WHERE MinhasLixeiras.idMinhasLixeiras = 1";
                
                $busca = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_array($busca)) {
                    $modelo = $dados['modelo'];
                    $capacidade = $dados['capacidade'];
                ?>
                    <tr>
                        <td><?php echo $modelo; ?></td>
                        <td><?php echo $capacidade; ?></td>
                    </tr>
              <?php } ?>
              </tbody>
          </table>
      </div>
            <div class="chart2">
            <div id="columnchart"></div>
            </div>
            <div class="chart3">
            </div>
        </div>
    </main>
  </body>
    
</html>
