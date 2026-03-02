<?php
require_once '../config/database.php';

class Contato {
    public static function salvar($nome, $email, $mensagem) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO contatos (nome, email, mensagem) VALUES (?, ?, ?)"
        );
        $stmt->execute([$nome, $email, $mensagem]);
    }
}