<?php

$host_db = 'localhost';
$nome_db = 'startfit';
$usuario_db = 'root';
$senha_db = '1234';

try {
    $conexao = new PDO("mysql:host=$host_db;dbname=$nome_db;charset=utf8mb4", $usuario_db, $senha_db, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Falha na conexão com o BD: ' . $e->getMessage()], JSON_UNESCAPED_UNICODE);
    exit;
}
?>