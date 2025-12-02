<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/db.php';

$entrada = $_POST;
if (!isset($entrada['aluno']) || !isset($entrada['id_exercicio'])) {
    echo json_encode(['erro' => 'Parametros ausentes'], JSON_UNESCAPED_UNICODE);
    exit;
}
$aluno = trim($entrada['aluno']);
$id_exercicio = (int) $entrada['id_exercicio'];

try {
    $stmt = $conexao->prepare('SELECT id_ficha FROM fichas WHERE nome_aluno = ? LIMIT 1');
    $stmt->execute([$aluno]);
    $ficha = $stmt->fetch();
    if ($ficha) {
        $id_ficha = $ficha['id_ficha'];
    } else {
        $stmt = $conexao->prepare('INSERT INTO fichas (nome_aluno) VALUES (?)');
        $stmt->execute([$aluno]);
        $id_ficha = $conexao->lastInsertId();
    }

    $stmt = $conexao->prepare('INSERT INTO fichas_exercicios (id_ficha, id_exercicio) VALUES (?, ?)');
    $stmt->execute([$id_ficha, $id_exercicio]);

    echo json_encode(['sucesso' => true, 'id_ficha' => $id_ficha], JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}
