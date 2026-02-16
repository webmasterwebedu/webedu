<?php
// Configurações de conexão com o banco de dados
$host = 'localhost';
$user = 'user';
$password = 'password';
$database = 'webedu'; // Nome do banco de dados

// Criar conexão
$conexao = mysqli_connect($host, $user, $password, $database);

// Verificar conexão
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Definir charset para UTF-8
mysqli_set_charset($conexao, "utf8mb4");

// Opcional: Definir timezone
date_default_timezone_set('America/Sao_Paulo');
?>
