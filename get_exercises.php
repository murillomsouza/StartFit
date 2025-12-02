<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/db.php';

try {
    $stmt = $conexao->query('SELECT id_exercicio as id, nome as name, categoria as category, equipamento as equipment, imagem as image FROM exercicios ORDER BY nome');
    $lista = $stmt->fetchAll();
    echo json_encode(['exercicios' => $lista], JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}
