<?php
    session_start();
    $_SESSION['perfilc'];
?>

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
        <a href="#" class="logo" id="logoLink"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>
        <script>
            var tipoUsuario = <?php echo $_SESSION['perfilc'];?>;
            var logoLink = document.getElementById('logoLink');

            if (tipoUsuario === 1) {
                logoLink.href = 'homecomprador.php';
            } else if (tipoUsuario === 2) {
                logoLink.href = 'homeproprietario.php';
            } else {
                logoLink.href = '#';
            }
        </script>

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
        </div>
        <div class="right">
            <h2>MINHAS INFORMAÇÕES</h2>
            <br>
            <h3>Nome:</h3>
            <label class="lbinfo" id="nomeusuario">
                <?php
                    echo $_SESSION['nomec'];
                ?>
            </label>
            <h3>Email:</h3>
            <label class="lbinfo" id="emailusuario">
                <?php
                    echo $_SESSION['emailc'];
                ?>
            </label>
            <button type="button" id="btnEditar">Editar</button>

            <button type="button" id="btnVincularLixeira" onclick="redirecionarPag()">Vincular lixeira</button>

            <script>
                function redirecionarPag() { 
                    window.location.href = "vincularlixeira.php";
                }
            </script>
        </div>
    </main>
    <!-- CONSTRUÇÃO DO POP-UP -->
    <div class="bg-popup">
        <div class="content-popup">
            <div class="close-pp">+</div> <!-- BTN FECHAR -->
            <h4>EDITE SUAS INFORMAÇÕES</h4><br>
            <form method="post" action=""> <!-- CRIANDO TUDO DENTRO DE UM FORMULARIO -->
                <label class="lbpopup">Nome:</label><br>
                <input type="text" name="inputNome" class="campo-popoup" id="editarNome"><br>
                <label class="lbpopup">Email:</label ><br>
                <input type="text" name="inputEmail" class="campo-popoup" id="editarEmail"><br>
                <label class="lbpopup">O endereço só pode ser alterado na hora da compra.</label><br>
                <button type="submit" id="btnConfirmar" name="btnConfirmar">Confirmar</button><br>
                <button type="reset" id="btnCancelar" name="btnCancelar">Cancelar</button>
            </form>
            </div>
        </div>
    </div>
    <script src="popup.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnConfirmar'])) {
        
        $alterNome = $_POST['inputNome'];
        $alterEmail = $_POST['inputEmail'];
        session_start();
        $idc = $_SESSION['idc'];

            $conn = new mysqli("localhost", "root", "", "WastWise");

            $sql = "UPDATE Cliente SET nomeCliente = '$alterNome', emailCliente = '$alterEmail' WHERE idCliente = $idc";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['nomec'] = $alterNome;
                $_SESSION['emailc'] = $alterEmail;
                header('Location: meuperfil.php');
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }
    } else {
        echo "Certifique-se de preencher ambos os campos de senha.";
    }
    $conn->close();
}
?>