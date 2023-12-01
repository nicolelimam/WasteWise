<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="confprod.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Conferir produtos</title>
</head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <div class="navbar">
            <a href="meuperfil.php" id="usericon"><div class="iconuser"></div></a>
            <button id="btnTheme">Ok</button>
            <a href="#" onclick="voltarPagina()">Voltar</a>
            <a href="index.php"><i class="ri-logout-circle-r-line" id="btn-logout"></i></a>
        </div>
    </header>
    <script>
            function voltarPagina() {
                window.history.back();
            }
        </script>
    <script src="mudartema.js"></script>
    <script src="popup.js"></script>
    <main>
        <div class="search-box">
            <input type="text" class="search-txt" id="campoPesquisa" placeholder="Pesquise o produto aqui">
            <a href="#" class="search-btn" id="btnPesquisar"><i class='bx bx-search'></i></a>
        </div>
        <br><br>
        <div class="products">
            <div class="card">
                <div class="img-product">
                    <img src="lixeira-preta-1.png" alt="">
                </div>
                <div class="info-product">
                    <h4>Lixeira Inteligente - Modelo 001</h4>
                    <h5>R$55,00</h5>
                </div>
                <div class="btnCard">
                    <button type="button" id="btnPopup1" class="btnpopup">Ver informações</button>
                </div>
            </div>
            <div class="card">
                <div class="img-product">
                    <img src="lixeira-branca.png" alt="">
                </div>
                <div class="info-product">
                    <h4>Lixeira Inteligente - Modelo 002</h4>
                    <h5>R$50,00</h5>
                </div>
                <div class="btnCard">
                    <button type="button" id="btnPopup2">Ver informações</button>
                </div>
            </div>
            <div class="card">
                <div class="img-product">
                    <img src="lixeira-preta-1.png" alt="">
                </div>
                <div class="info-product">
                    <h4>Lixeira Inteligente - Modelo 003</h4>
                    <h5>R60,00</h5>
                </div>
                <div class="btnCard">
                    <button type="button" id="btnPopup3">Ver informações</button>
                </div>
            </div>
        </div>
        <!-- Area dos pop-ups -->
    </main>
    <div class="bg-popup1">
        <div class="content-popup1">
            <div class="close">+</div>
            <div class="img-popup1">
                <img src="lixeira-preta-1.png" alt="">
            </div>
            <div class="info-popup1">
                <h2>Lixeira Inteligente - Modelo 001</h2>
                <h3>Capacidade: 5 litros | Cor: Preta</h3>
                <h1>R$55,00</h1>
            </div>
            <div class="btn-comprar">
                <button type="button" class="btn" id="btnComprar" onclick="redirecionaCompra()">Comprar</button>
                <script>
                    function redirecionaCompra() {
                        window.location.href = 'compraprod.php';
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="bg-popup2">
        <div class="content-popup2">
            <div class="close2">+</div>
            <div class="img-popup2">
                <img src="lixeira-branca.png"">
            </div>
            <div class="info-popup2">
                <h2>Lixeira Inteligente - Modelo 002</h2>
                <h3>Capacidade: 5 litros | Cor: Branca</h3>
                <h1>R$50,00</h1>
            </div>
            <div class="btn-comprar">
                <button type="button" class="btn" id="btnComprar" onclick="redirecionaCompra()">Comprar</button>
            </div>
        </div>
    </div>
    <div class="bg-popup3">
        <div class="content-popup3">
            <div class="close3">+</div>
            <div class="img-popup3">
                <img src="lixeira-preta-1.png"">
            </div>
            <div class="info-popup3">
                <h2>Lixeira Inteligente - Modelo 003</h2>
                <h3>Capacidade: 7 litros | Cor: Preto</h3>
                <h1>R$50,00</h1>
            </div>
            <div class="btn-comprar">
                <button type="button" class="btn" id="btnComprar" onclick="redirecionaCompra()">Comprar</button>
            </div>
        </div>
    </div>
</body>
</html>