<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WasteWise";

// Criar conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>