<?php
  include("conexao.php");
?>
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
            <li><a href="#" class="active">Home</a></li>
            <li><a href="relatorios.php">Relatórios</a></li>
            <li><a href="confprod.php">Adquirir nova lixeira</a></li>
        </ul>

        <div class="main">
            <a href="meuperfil.php" id="usericon"><div class="iconuser"></div><span>Olá, user!</span></a>
            <button id="btnTheme">Ok</button>
            <a href="index.php"><i class="ri-logout-circle-r-line" id="btn-logout"></i></a>
            <i class="ri-menu-line" id="menu-icon"></i>
        </div>
    </header>
    <!--Chamando o codigo js-->
    <script src="mudartema.js"></script>
    <main>
        <div class="titulopag">
          <h2>MINHAS LIXEIRAS<h2>
        </div>
        <div class="panel-lixeiras">

        </div>
    </main>
  </body>
    
</html>
