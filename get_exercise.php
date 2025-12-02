<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/db.php';


if (!isset($_GET['id_exercicio'])) {
    echo json_encode(['erro' => 'Parametro id_exercicio ausente'], JSON_UNESCAPED_UNICODE);
    exit;
}

$id_exercicio = (int) $_GET['id_exercicio'];
try {
    $stmt = $conexao->prepare('SELECT * FROM exercicios WHERE id_exercicio = ?');
    $stmt->execute([$id_exercicio]);
    $linha = $stmt->fetch();
    if (!$linha) {
        echo json_encode(['erro' => 'Exercício não encontrado'], JSON_UNESCAPED_UNICODE);
        exit;
    }
    echo json_encode(['exercicio' => $linha], JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}
