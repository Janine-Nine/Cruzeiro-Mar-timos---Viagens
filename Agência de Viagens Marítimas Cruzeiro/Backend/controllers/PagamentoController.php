<?php
require_once '../models/Pagamento.php';

class PagamentoController {
    public static function processar() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido"]);
            exit;
        }

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $destino = filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
        $forma = filter_input(INPUT_POST, 'pagamento', FILTER_SANITIZE_STRING);

        if (!$nome || !$email || !$destino || !$forma) {
            http_response_code(400);
            echo json_encode(["erro" => "Dados inválidos"]);
            exit;
        }

        Pagamento::salvar($nome, $email, $destino, $forma);

        echo json_encode([
            "status" => "sucesso",
            "mensagem" => "Pagamento registrado com sucesso!"
        ]);
    }
}