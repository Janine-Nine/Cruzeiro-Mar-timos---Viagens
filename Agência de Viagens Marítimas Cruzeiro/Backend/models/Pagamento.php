<?php
require_once '../config/database.php';

class Pagamento {
    public static function salvar($nome, $email, $destino, $forma) {
        $db = Database::connect();
        $sql = "INSERT INTO pagamentos (nome, email, destino, forma_pagamento)
                VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$nome, $email, $destino, $forma]);
    }
}