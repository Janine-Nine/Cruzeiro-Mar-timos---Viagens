<?php
// Verificar se PDO MySQL está disponível
$pdo_available = extension_loaded('pdo_mysql');
$db_connected = false;

if ($pdo_available) {
    try {
        require_once '../config/database.php';
        $db = Database::connect();
        $db_connected = true;
    } catch (Exception $e) {
        $db_connected = false;
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Backend - Cruzeiros & Turismo</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; background: #f5f5f5; }
        .container { background: white; padding: 30px; border-radius: 8px; max-width: 600px; margin: 0 auto; }
        h1 { color: #1a3556; }
        .status { margin: 20px 0; padding: 15px; border-radius: 5px; }
        .success { background: #d4edda; color: #155724; border-left: 4px solid #28a745; }
        .error { background: #f8d7da; color: #721c24; border-left: 4px solid #dc3545; }
        .endpoint { background: #e9ecef; padding: 10px; margin: 10px 0; border-radius: 5px; font-family: monospace; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚢 Backend da Agência Cruzeiros & Turismo</h1>
        <p>Este é o servidor backend da aplicação. Os endpoints disponíveis são:</p>
        
        <h2>Status do Sistema</h2>
        <div class="status <?php echo $db_connected ? 'success' : 'error'; ?>">
            <strong>Banco de Dados:</strong> 
            <?php echo $db_connected ? '✅ Conexão OK' : '❌ Sem conexão'; ?>
            <?php if (!$db_connected && isset($error)): ?>
                <br><small><?php echo htmlspecialchars($error); ?></small>
            <?php endif; ?>
        </div>

        <h2>Endpoints API</h2>
        <div class="endpoint">POST /Backend/public/processar_contato.php</div>
        <p>Salva um contato - Campos: nome, email, mensagem</p>

        <div class="endpoint">POST /Backend/public/processar_hospedagem.php</div>
        <p>Reserva hospedagem - Campos: nome, email, destino, tipo_hospedagem</p>

        <div class="endpoint">POST /Backend/public/processar_pagamento.php</div>
        <p>Registra pagamento - Campos: nome, email, destino, pagamento</p>

        <div class="endpoint">POST /Backend/public/processar_escolha.php</div>
        <p>Processa escolha de transporte - Campo: tipo_viagem (aviao/cruzeiro)</p>

        <hr>
        <p style="color: #666; font-size: 0.9em;">
            ✅ Todos os endpoints retornam JSON com status de sucesso ou erro.
        </p>
    </div>
</body>
</html>
