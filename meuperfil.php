<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="meuperfil.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Meu perfil</title>
</head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <div class="navbar">
            <button id="btnTheme">Ok</button>
            <a href="#" onclick="voltarPagina()">Voltar</a>
            <a href="index.php"><i class="ri-logout-circle-r-line" id="btn-logout"></i></a>
            <i class="ri-menu-line" id="menu-icon"></i>
        </div>
    </header>
    <script>
            function voltarPagina() {
                window.history.back();
            }
        </script>
    <script src="mudartema.js"></script>

    <main>
        <div class="left">
            <h1>MEU PERFIL</h1>
            <br><br>
            <div class="ftperfil">
            </div>
            <br><br>
            <button type="button" id="btnFotoPerfil">Alterar imagem</button>
        </div>
        <div class="right">
            <h2>MINHAS INFORMAÇÕES</h2>
            <br>
            <label class="lbinfo" id="nomeusuario">Nome do usuário</label>
            <h3>Email:</h3>
            <label class="lbinfo" id="emailusuario">usuario@gmail.com</label>
    
            <h3>Endereços cadastrados:</h3> 
            <label class="lbinfo" id="enderecousuario">Endereços cadastrados no bd</label> 
            <br>
            <button type="button" id="btnEditar">Editar</button>

            <button type="button" id="btnVincularLixeira" onclick="redirecionarPag()">Vincular lixeira</button>

            <script>
                        function redirecionarPag() { 
                            window.location.href = "vincularlixeira.php";
                        }
                    </script>
        </div>
    </main>


</body>
</html>