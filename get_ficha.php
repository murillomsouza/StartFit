<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/validador.php';

try {
    if (!isset($_GET['aluno']) || empty($_GET['aluno'])) {
        throw new Exception('Nome do aluno não fornecido');
    }

    $nome_aluno = $_GET['aluno'];

    // Buscar exercícios da ficha do aluno
    $sql = "SELECT 
                fe.id as id_ficha_exercicio,
                e.id_exercicio,
                e.nome,
                e.categoria,
                e.equipamento,
                e.descricao,
                e.imagem
            FROM fichas f
            LEFT JOIN fichas_exercicios fe ON f.id_ficha = fe.id_ficha
            LEFT JOIN exercicios e ON fe.id_exercicio = e.id_exercicio
            WHERE f.nome_aluno = ?
            ORDER BY fe.data_criacao DESC";

    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome_aluno]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Filtrar resultados nulos (ficha vazia)
    $exercicios = array_filter($resultado, function($item) {
        return $item['id_exercicio'] !== null;
    });

    echo json_encode([
        'sucesso' => true,
        'exercicios' => array_values($exercicios)
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'sucesso' => false,
        'erro' => $e->getMessage()
    ]);
}
?>
