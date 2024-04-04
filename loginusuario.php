<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="configsenha.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Login</title>
</head>
<body>
    <div class="navbar">
        <button id="btnTheme">Ok</button>
    </div>
    <div class="container">
        <div class="left-login">
            <h1>Faça login <br>E acesse todos os recursos da WasteWise</h1>
            <img class="left-login-imagem" src="Imagens/img-login-animada.svg" alt="Imagem de login">
        </div>
        <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1> 
                    <div class="textfield">
                        <label for="campoEmail">Email</label>
                        <input type="email" name="campoEmail" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="campoSenha">Senha</label>
                        <input type="password" name="campoSenha" placeholder="Senha">
                    </div>
                    <button class="btn-login" name="btnEntrar">Entrar</button>
                    <br>
                    <div class="alt">
                        <h4>Ainda não tem uma conta?</h4>
                        <a href="cadastrarusuario.php">Cadastre-se</a>
                    </div>
                </div>
        </div>
    </div>

</body>
<script src="Js/mudartema.js"></script>
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
        //echo "Certifique-se de preencher ambos os campos de senha.";
        echo "";
    }

?>