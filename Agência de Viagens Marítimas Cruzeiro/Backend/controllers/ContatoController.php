<?php
require_once '../models/Contato.php';

class ContatoController {

    public static function processar() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido"]);
            exit;
        }

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

        if (!$nome || !$email || !$mensagem) {
            http_response_code(400);
            echo json_encode(["erro" => "Dados inválidos"]);
            exit;
        }

        Contato::salvar($nome, $email, $mensagem);

        echo json_encode([
            "status" => "sucesso",
            "mensagem" => "Mensagem enviada com sucesso!"
        ]);
    }
}