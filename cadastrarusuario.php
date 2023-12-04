<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cadus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="configsenha.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Cadastre-se</title>
</head>
<body>
        <header> <!-- Cabeçalho da página/barra de navegação-->
            <a href="#" class="logo"><img src="bin-icon3.png" class="img-logo"/></i><span>WasteWise</span></a>

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
        <!--Chamando o script que muda o tema da página-->
        <script src="mudartema.js"></script>
        <main>
            <form method="post" class="form-cad" action="">
                <h1>CRIE SUA CONTA</h1>
                <div class="input-box">
                    <label class="lbform">Insira seu nome</label><br>
                    <input type="text" name="campoNome" class="campotxt"><br>
                </div>
                <div class="input-box">
                    <label class="lbform">Insira seu e-mail</label><br>
                    <input type="text" name="campoEmail" class="campotxt"><br>
                </div>
                <div class="input-box">
                    <label class="lbform">Crie uma senha</label><br>
                    <input type="password" name="campoSenha" class="campotxt"><br>
                    <span id="message"></span>
                </div>
                <div class="input-box">
                    <label class="lbform">Confirme sua senha</label><br>
                    <input type="password" name="confirmaSenha" class="campotxt"><br>
                    <span id="message"></span><br>
                </div>
                <div class="btn-form">
                    <button type="submit" class="criar-conta">Criar conta</button><br>  
                    <button type="reset" class="cancelar">Cancelar</button>
                </div>
                <div class="alt">
                    <h4>Já tem uma conta?</h4><a href="loginusuario.php">Fazer login</a>
                </div>
            </form>
        </main>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['campoSenha']) && isset($_POST['confirmaSenha'])) {
        
        $senha1 = $_POST['campoSenha'];
        $senha2 = $_POST['confirmaSenha'];

        if ($senha1 == $senha2) {
            $nome = $_POST['campoNome'];
            $email = $_POST['campoEmail'];
            $senha = $_POST['campoSenha'];
            $senhaHashed = password_hash($senha, PASSWORD_DEFAULT);
            $perfil = 1;

            $conn = new mysqli("localhost", "root", "", "WastWise");

            $sql = "INSERT INTO Cliente (nomeCliente, emailCliente, senhaCliente, perfilCliente) VALUES ('$nome', '$email', '$senhaHashed', $perfil)";

            if ($conn->query($sql) === TRUE) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . $conn->error;
            }

            $sql_select = "SELECT * FROM Cliente";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    session_start();
                    $_SESSION['idc'] = $row["idCliente"];
                    $_SESSION['nomec'] = $row["nomeCliente"];
                    $_SESSION['emailc'] = $row["emailCliente"];
                    $_SESSION['senhac'] = $row["senhaCliente"];
                    $_SESSION['perfilc'] = $row["perfilCliente"];
                }
            }   header('Location: homecomprador.php');
        } else {
            echo "As senhas não coincidem. Por favor, tente novamente.";
        }
    } else {
        echo "Certifique-se de preencher ambos os campos de senha.";
    }
}
    $conn->close();
?>