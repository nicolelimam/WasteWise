<?php
  include("conexao.php"); //CHAMANDO O CÓDIGO QUE CONECTA COM O BANCO
?>
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

    <!--CONFIGURAÇÃO DO GRÁFICO -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Data');
            data.addColumn('number', 'Volume em litros');

            //PUXANDO OS DADOS DO BANCO
            <?php
            $sql = "SELECT * FROM DadosArduino";
            $busca = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($busca)) {
                $volume = $dados['volume'];
                $date = $dados['date'];
            ?>

            data.addRow(['<?php echo $date ?>', <?php echo $volume ?>]);

            <?php } ?>
            
            var options = {
                title: 'Como você tem usado sua lixeira nos últimos 5 dias...',
                backgroundColor: 'transparent', // Adicionado para tornar o fundo transparente
                colors: ['#628A4C', '#C4E477', '#87B344', '#AFBE6B', '#CFE0BC', '#829A1E', '#E0C7B7', '#1E361E'],
                titleTextStyle: {
                    fontSize: 18, // Ajuste o tamanho da fonte do título conforme necessário
                        },
                legend: {
                    textStyle: {
                        fontSize: 16, // Ajuste o tamanho da fonte da legenda conforme necessário
                    }   
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

</head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <ul class="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="#" class="active">Relatórios</a></li>
            <li><a href="confprod.html">Adquirir nova lixeira</a></li>
        </ul>

        <div class="main">
            <a href="#" id="usericon"><div class="iconuser"></div><span>Olá, user!</span></a>
            <button id="btnTheme">Ok</button>
            <a href="index.php"><i class="ri-logout-circle-r-line" id="btn-logout"></i></a>
            <i class="ri-menu-line" id="menu-icon"></i>
        </div>
    </header>
    <!--Chamando o codigo js-->
    <script src="mudartema.js"></script>
    <main>
        <div class="titulopag">
          <h2>RELATÓRIOS DE USO<h2>
        </div>
        <div class="graficos">
            <!-- AQUI ESTOU ABRINDO O GRÁFICO -->
            <center><div id="piechart" style="width: 800px; height: 410px;"></div></center>
        </div>
    </main>
  </body>
    
</html>
