<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Home</title>
</head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>
        <ul class="navbar">
                <li><a href="cadastrarusuario.php">Cadastre-se</a></li>
                <li><a href="loginusuario.php">Entrar</a></li>
        </ul>
        <div class="main">
            <button id="btnTheme">Ok</button>
            <i class="ri-menu-line" id="menu-icon"></i>
        </div>
    </header>
    <script src="mudartema.js"></script>

    <main>
            <div class="propaganda">
                <div class="prop-text">
                    <h1>GERENCIE SEUS GASTOS E PRODUÇÃO DE LIXO</h1>
                    <h3>Confira nossa lixeira inteligente e descubra a solução para controlar o desperdício e automatizar sua rotina.</h3>
                    <div class="btn-confprod">
                        <a href="confprod.html">Conferir produtos</a><i class='bx bx-play'></i>
                    </div>
                </div>
                <div class="prop-alt">
                    <h4>Ainda não tem uma conta?</h4>
                    <a href="cadastrarusuario.php">Criar uma conta.</a>
                    <h4>Ou ao invés disso:</h4>
                    <a href="loginusuario.php">Entrar em sua conta.</a>
                </div>
            </div>
            <div class="prop-img">
                <img src="lixeiravetor1.png" alt="" class="img-prop">
            </div>
    </main>  
  </body>
</html>