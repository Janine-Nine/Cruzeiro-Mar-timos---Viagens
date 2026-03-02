<?php
require_once '../config/database.php';

class Hospedagem {
    public static function salvar($nome, $email, $destino, $tipo_hospedagem) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO hospedagens (nome, email, destino, tipo_hospedagem) VALUES (?, ?, ?, ?)"
        );
        $stmt->execute([$nome, $email, $destino, $tipo_hospedagem]);
    }
}