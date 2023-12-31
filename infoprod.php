<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="minhalixeira.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <title>Informações do produto</title>
</head>
  <body>
    <div class="container">
        <div class="navbar"> <!-- Criando um conteiner/divisão que engloba tudo o que está na barra de navegação -->
            <div class="logo"> <!-- Criando um conteiner/divisão para colocar o logotipo do site -->
                <img src="WasteWise.png" alt="Logo" class="logo-image">
            </div>
            <nav> <!-- Criando uma estrutura de lista/barra de navegação dos itens da barra -->
                <ul>
                    <li><a href="index.html">Voltar ao início</a></li> <!-- Botão para voltar para a pagina principal sem conta -->
                </ul>
            </nav>
        </div>
        <div class="left"></div>
        <div class="titulopag">
            <h1>Sobre o produto</h1>
        </div>
        <div class="left">
            <div class="produto">
                <h2>Modelo: L0001 1.0</h2>
                <div class="imgProduto">
                    <img src="lixeiraprod.png">
                </div>
                <a href="cadastrarusuario.html" id="btnComprar">Adquirir lixeira</a>
            </div>
        </div>
        </div>
        <div class="right">
            <div class="infolixeira">
                <h2>Informações do produto</h2>
                <h3>Modelo:</h3> <label class="lbinfo">L0001 1.0</label>
                <h3>Capacidade:</h3> <label class="lbinfo">5 litros</label>
                <h3>Código do produto:</h3> <label class="lbinfo">5 litros</label>
                <h3>Data de fabricação:</h3> <label class="lbinfo">03/07/2023</label>
                <h3>Informações técnicas:</h3>
                <label class="lbinfo">  Sensor ultrassônico identificador de proximidade <br>
                                        Sensor ultrassônico medidor de voluma <br>
                                        Servo motor para movimento de abertura da tampa <br>
                                        Display para exibição do status do volume da lixeira <br>
                                        Conexão com o sistema WasteWise</label>
                <h3>Fabricante:</h3> <label class="lbinfo">Equipe 4ADS</label>
            </div>
        </div>
    </div>
  </body>
</html> 