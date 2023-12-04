<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="longinus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="configsenha.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Entre em sua conta</title>
</head>
<body>
        <header> <!-- Cabeçalho da página/barra de navegação-->
            <a href="index.php" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>
            <div class="navbar">
                <button id="btnTheme">Ok</button>
                <a href="#" onclick="voltarPagina()">Voltar</a>
            </div>
        </header>
        <script>
            function voltarPagina() {
                window.history.back();
            }
        </script>
        <script src="mudartema.js"></script>
        <main>
            <form method="post" class="form-login" action="">
                <h1>ENTRE EM SUA CONTA</h1>
                <div class="input-box">
                    <label class="lbform">Insira seu e-mail</label><br>
                    <input type="text" name="campoEmail" class="campotxt"><br>
                </div>
                <div class="input-box">
                    <label class="lbform">Insira sua senha</label><br>
                    <input type="password" name="campoSenha" class="campotxt"><br>
                    <span id="message"></span>
                </div>
                <div class="btn-form">
                    <button type="submit" class="entrar-conta" id="btnEntrar" name="btnEntrar">Entrar</button><br>
                    <button type="reset" class="cancelar" id="btnCancelar">Cancelar</button>
                </div>
                <div class="alt">
                    <h4>Ainda não tem uma conta?<a href="cadastrarusuario.php">Cadastre-se</a></h4>
                </div>
            </form>
            <br>
        </main>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btnEntrar'])) {
        
        $email = $_POST['campoEmail'];
        $senha_digitada = $_POST['campoSenha'];


            $conn = new mysqli("localhost", "root", "", "WastWise");

            $sql_select = "SELECT * FROM Cliente WHERE emailCliente='$email'";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['idc'] = $row["idCliente"];
                    $_SESSION['nomec'] = $row["nomeCliente"];
                    $_SESSION['emailc'] = $row["emailCliente"];
                    $_SESSION['senhac'] = $row["senhaCliente"];
                    $_SESSION['perfilc'] = $row["perfilCliente"];

                    if (password_verify($senha_digitada, $_SESSION['senhac'])) {
                        if($_SESSION['perfilc'] == 1){
                            header('Location: homecomprador.php');
                        }else{
                            header('Location: homeproprietario.php');
                        }
                    } else {
                        
                    }

                }
            } 
        } else {
            echo "As senhas não coincidem. Por favor, tente novamente.";
        }
    } else {
        echo "Certifique-se de preencher ambos os campos de senha.";
    }

?>