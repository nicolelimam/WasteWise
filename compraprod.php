<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="compraprod.css"> <!-- Indica o arquivo css que vai ser usado pra customizar essa página  -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Faz conexão com o google fonts, que fornece a fonte que está sendo usada  -->
    <title>Finalizar pedido</title>
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
    <main>
        <form method="post" class="form-compra" action="">
            <h2>FINALIZAR COMPRA</h2>
            <h4>Cadastre seu endereço e cartão de crédito.</h4>
            <div class="form-img">
                <label class="lbimg">CARTÕES ACEITOS</label><br>
                <img src="card_img.png" alt="">
            </div>
            <div class="left-items">
                <input type="text" class="campotxt" id="cep" name="campoCep" placeholder="Digite seu Endereço"><br>
                <input type="text" class="campotxt" name="campoCidade" placeholder="Cidade">
                <input type="text" class="campotxt" name="campoEstado" placeholder="Estado">
            </div>
            <div class="right-items">
                <input type="text" class="campotxt" name="campoNomeCartao" placeholder="Nome no cartão">
                <input type="number" class="campotxt" name="campoCartao" placeholder="Número do cartão">
                <input type="text" class="campotxt" name="campoData" placeholder="Data de expiração">
                <input type="number" class="campotxt" name="campoCvv" placeholder="CVV">
            </div>
            <div class="form-btns">
                <br>
                <button type="submit" class="finalizar" id="btnFinalizar" name="btnFinalizar">Finalizar compra</button>
                <br>
                <button type="reset" class="cancelar" id="btnCancelar">Cancelar</button>
            </div>
        </form>
    </main>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnFinalizar'])) {


            $conn = new mysqli("localhost", "root", "", "WastWise");
            session_start();
            $idCliente = $_SESSION['idc'];
            $codigoSerial = "LKOS192jsIDB874";
            $valorLixeira = 55.0;

            $sql1 = "INSERT INTO Compra (idCliente, codigoSerial, valor) VALUES ($idCliente, '$codigoSerial', $valorLixeira)";

            if ($conn->query($sql1) === TRUE) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }

            $sql2 = "INSERT INTO MinhasLixeiras (idCliente, codigoSerial, statusLixeira) VALUES ($idCliente, '$codigoSerial', 1)";

            if ($conn->query($sql2) === TRUE) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }

            $endereco = $_POST['campoCep'];
            $cidade= $_POST['campoCidade'];
            $estado = $_POST['campoEstado'];

            $sql3 = "INSERT INTO ClienteCep (enderecoCep, cidadeCep, estadoCep, idCliente) VALUES ('$endereco', '$cidade', '$estado', $idCliente)";

            if ($conn->query($sql3) === TRUE) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }
            
            $perfil = $_SESSION['perfilc'];

            if($perfil == 1){
                header('Location: homecomprador.php'); 
            }else{
                header('Location: homeproprietario.php');
            }
            
        
    } else {
        echo "Certifique-se de preencher ambos os campos de senha.";
    }
}
    $conn->close();
?>