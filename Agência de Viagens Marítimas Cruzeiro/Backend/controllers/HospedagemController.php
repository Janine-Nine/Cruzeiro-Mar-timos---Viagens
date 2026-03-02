<?php
require_once '../models/Hospedagem.php';

class HospedagemController {

    public static function processar() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido"]);
            exit;
        }

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $destino = filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
        $tipo_hospedagem = filter_input(INPUT_POST, 'tipo_hospedagem', FILTER_SANITIZE_STRING);

        if (!$nome || !$email || !$destino || !$tipo_hospedagem) {
            http_response_code(400);
            echo json_encode(["erro" => "Dados inválidos"]);
            exit;
        }

        Hospedagem::salvar($nome, $email, $destino, $tipo_hospedagem);

        echo json_encode([
            "status" => "sucesso",
            "mensagem" => "Hospedagem reservada com sucesso!"
        ]);
    }
}