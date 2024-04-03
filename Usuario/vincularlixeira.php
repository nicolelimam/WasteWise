<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vinclixeira.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Vincular lixeira</title>
</head>
  <body>
    <header>
        <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

        <div class="navbar">
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

    <main>
        <form method="post" class="form-vinc" action="">
            <h3>VINCULAR NOVA LIXEIRA À CONTA</h3>
            <h4>Você pode vincular quantos produtos quiser à sua conta e aproveitar todos os benefícios que a WasteWise oferece!</h4>
            <div class="form-cod">
                <h5>CÓDIGO SERIAL</h5>
                <h6>Insira abaixo o código serial da sua lixeira</h6>
                <input type="text" name="campoSerial" id="campoCodSerial">
            </div>
            <div class="form-btns">
                <input type="submit" id="btnVincular" name="btnVincular" value="Vincular">
                <br>
                <input type="reset" id="btnCancelar" value="Cancelar">
            </div>
        </form>
    </main>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnVincular'])) {
        
        session_start();
        $email = $_SESSION['emailc'];
        $id = $_SESSION['idc'];
        $serial = $_POST['campoSerial'];

            $conn = new mysqli("localhost", "root", "", "WastWise");

            $sql1 = "UPDATE Cliente SET perfilCliente = 2 WHERE emailCliente = '$email'";

            if ($conn->query($sql1) === TRUE) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }

            $sql2 = "UPDATE MinhasLixeiras SET statusLixeira = 2 WHERE idCliente = $id and CodigoSerial = '$serial'";

            if ($conn->query($sql2) === TRUE) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }
        
    } else {
        echo "Certifique-se de preencher ambos os campos de senha.";
    }
}
    $conn->close();
?>