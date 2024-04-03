<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home2.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Home</title>
</head>
  <body>
    <header>
      <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <ul class="navbar">
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
      <div class="panel-compras">
      <h2>MINHAS COMPRAS</h2>
          <table id="tabelaCompras">
            <thead>
              <tr>
                <th>Modelo</th>
                <th>Código Serial</th>
                <th>Data</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
            <?php
            session_start();
            $id_cliente = $_SESSION['idc'];
            $conn = new mysqli("localhost", "root", "", "WastWise");
            $sql = "SELECT Lixeira.modelo, Lixeira.codigoSerial, Compra.data, Compra.valor
                    FROM Lixeira
                    INNER JOIN Compra ON Lixeira.codigoSerial = Compra.codigoSerial
                    WHERE Compra.idCliente = $id_cliente";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row['modelo'] . '</td>
                            <td>' . $row['codigoSerial'] . '</td>
                            <td>' . $row['data'] . '</td>
                            <td>' . $row['valor'] . '</td>
                          </tr>';
                }
            } else {
                echo '<tr><td colspan="4">Nenhum dado disponível</td></tr>';
            }
            ?>
            </tbody>
          </table>
          <a href="vincularlixeira.php" id="btnVinc">Vincular lixeira</a>
      </div> 
    </main>
  </body>
    
</html>