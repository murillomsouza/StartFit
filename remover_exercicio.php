<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/validador.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Método não permitido');
    }

    $id_ficha_exercicio = $_POST['id_ficha_exercicio'] ?? null;

    if (!$id_ficha_exercicio) {
        throw new Exception('ID do exercício na ficha não fornecido');
    }

    $sql = "DELETE FROM fichas_exercicios WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$id_ficha_exercicio]);

    echo json_encode([
        'sucesso' => true,
        'mensagem' => 'Exercício removido com sucesso'
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'sucesso' => false,
        'erro' => $e->getMessage()
    ]);
}
?>
