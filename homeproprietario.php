<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Home</title>
</head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <ul class="navbar">
            <li><a href="relatorios.php">Relatórios</a></li>
            <li><a href="confprod.php">Adquirir nova lixeira</a></li>
        </ul>

        <div class="main">
            <a href="meuperfil.php" id="usericon"><div class="iconuser"></div><span>
              <?php
                session_start();
                echo "Olá, ".$_SESSION['nomec'];
              ?>
            </span></a>
            <button id="btnTheme">Ok</button>
            <a href="index.php"><i class="ri-logout-circle-r-line" id="btn-logout"></i></a>
            <i class="ri-menu-line" id="menu-icon"></i>
        </div>
    </header>
    <!--Chamando o codigo js-->
    <script src="mudartema.js"></script>
    <main>
    <div class="panel-lixeiras">
      <h2>MINHAS LIXEIRAS</h2>
          <table id="tabelaLixeiras">
            <thead>
              <tr>
                <th>Código Serial</th>
              </tr>
            </thead>
            <tbody>
            <?php
              session_start();
              $id_cliente = $_SESSION['idc'];
              $conn = new mysqli("localhost", "root", "", "WastWise");
              $sql = "SELECT CodigoSerial
                      FROM MinhasLixeiras
                      WHERE statusLixeira = 2 and idCliente = $id_cliente";

              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo '<tr>
                              <td>' . $row['CodigoSerial'] . '</td>
                            </tr>';
                  }
              } else {
                  echo '<tr><td colspan="4">Nenhum dado disponível</td></tr>';
              }
            ?>

            <?php

            $conn = new mysqli("localhost", "root", "", "WastWise");

            // Verificar a conexão
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            // Ler dados do arquivo
            $dados = file("dadosArduino.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Calcular a média
            $media = array_sum($dados) / count($dados);

            // Inserir a média no banco de dados
            $sql = "INSERT INTO DadosArduino (idMinhasLixeiras, volume) VALUES ('AGyDV187kL12DE7', $media)";

            if ($conn->query($sql) === TRUE) {
                echo "Média inserida com sucesso no banco de dados!";
            } else {
                echo "Erro ao inserir a média: " . $conn->error;
            }

            // Fechar a conexão
            $conn->close();
            ?>
            
            </tbody>
          </table>
          <a href="vincularlixeira.php" id="btnVinc">Vincular nova lixeira</a>
      </div> 
    </main>
  </body>

</html>
