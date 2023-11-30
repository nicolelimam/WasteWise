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
                    <p>Ainda não tem uma conta?</p><a href="cadastrarusuario.html">Criar uma conta.</a>
                    <p>Ou ao invés disso:</p><a href="loginusuario.html">Entrar em sua conta.</a>
                </div>
            </div>
            <div class="prop-img">
                <img src="lixeiravetor1.png" alt="" class="img-prop">
            </div>
    </main>  
    <!--
    <div class="container"> // Criando um conteiner/divisão que engloba todo o site
        <div class="navbar"> //Criando um conteiner/divisão que engloba tudo o que está na barra de menu
            
            <nav> //Criando uma estrutura de lista/barra de navegação dos itens do menu 
                <ul>
                    <li><a href="cadastrarusuario.html">Cadastre-se</a></li>
                    <li><a href="loginusuario.html">Entrar</a></li>
                </ul>
            </nav>
        </div>
        <div class="home-content"> //Criando uma div para o conteúdo gráfico/promocional do site  
            <div class="img-contenthome"> //Div para as imagens que estarão no site 
                <img src="lixoimg.png" class="contenthome-image">
            </div>
            <div class="text-content"> //Criando uma div para o texto e botão do site 
                <div class="textocontent">  //Div que engloba só o texto 
                    <h1>Gerencie seus gastos e produção de lixo</h1>
                    <h3>Confira nossa lixeira inteligente e descubra a solução para controlar o desperdício e automatizar sua rotina.</h3>
                </div>
                <div class="button-content"> // Div que engloba só o botão 
                    <a href="confprod.html" id="btnConferirProduto" onclick="redirecionarPag()">Conferir produto</a>
                    <script>
                        function redirecionarPag() { 
                            // Função pra redirecionar para a página de produto
                            window.location.href = "confprod.html";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>-->
  </body>
</html>