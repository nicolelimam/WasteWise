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
<div class="navbar">
            <button id="btnTheme">Ok</button>
        </div>
        <div class="container">
            <div class="left-login">
                <h1>Cadastre-se <br>E acesse todos os recursos da WasteWise</h1>
                <img class="left-login-imagem" src="Imagens/img-login-animada.svg" alt="Imagem de login">
            </div>
            <div class="right-login">
                    <div class="card-login">
                        <h1>Cadastro</h1> 
                        <div class="textfield">
                            <label for="campoNome">Nome</label>
                            <input type="text" name="campoNome" placeholder="Nome">
                        </div>
                        <div class="textfield">
                            <label for="email">Email</label>
                            <input type="email" name="campoEmail" placeholder="Email">
                        </div>
                        <div class="textfield">
                            <label for="campoSenha">Senha</label>
                            <input type="password" name="campoSenha" placeholder="Senha">
                        </div>
                        <div class="textfield">
                            <label for="confirmaSenha">Confirmação de senha</label>
                            <input type="password" name="confirmaSenha" placeholder="Repita a senha">
                        </div>
                        <button type="submit" class="criar-conta">Criar conta</button>
                    </div>
            </div>
        </div>


</body>
<script src="Js/mudartema.js"></script>
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
        //echo "Certifique-se de preencher ambos os campos de senha.";
        echo "";
    }
}
    $conn->close();
?>