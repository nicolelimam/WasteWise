
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "WastWise"; 

// Criando a conexão
$conexao = new mysqli($servername, $username, $password, $database);

// Verificando a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
