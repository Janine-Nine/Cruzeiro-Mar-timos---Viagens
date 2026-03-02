<?php
session_start();

// Se veio do POST do formulário, processa e redireciona
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nome"])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
    $forma_pagamento = filter_input(INPUT_POST, 'forma_pagamento', FILTER_SANITIZE_STRING);
    $tipo_viagem = filter_input(INPUT_POST, 'tipo_viagem', FILTER_SANITIZE_STRING);

    // Validação básica
    if (!$nome || !$cpf || !$data_nascimento || !$forma_pagamento || !$tipo_viagem) {
        http_response_code(400);
        $_SESSION['erro'] = "Todos os campos são obrigatórios";
        header("Location: processar_escolha.php?tipo=" . urlencode($tipo_viagem));
        exit;
    }

    // Salva os dados na sessão
    $_SESSION['dados_viagem'] = [
        'nome' => $nome,
        'cpf' => $cpf,
        'data_nascimento' => $data_nascimento,
        'forma_pagamento' => $forma_pagamento,
        'tipo_viagem' => $tipo_viagem
    ];

    // Redireciona para hospedagem
    header("Location: ../../Frontend/hospedagem.html");
    exit;
}

// Se veio do click dos cards (apenas tipo_viagem), mostra o formulário
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["tipo_viagem"])) {
    $_SESSION["tipo_viagem"] = $_POST["tipo_viagem"];
}

// Se vem via GET, recupera o tipo
if (isset($_GET['tipo'])) {
    $_SESSION["tipo_viagem"] = $_GET['tipo'];
}

// Verifica se tem tipo_viagem
if (!isset($_SESSION["tipo_viagem"])) {
    header("Location: ../../Frontend/ComoViajar.html");
    exit;
}

$tipo_viagem = $_SESSION["tipo_viagem"];
$tipo_label = $tipo_viagem === "aviao" ? "✈️ AVIÃO" : "🚢 CRUZEIRO";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da Viagem - Cruzeiros & Turismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Frontend/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../Frontend/index.html"><img src="../../Frontend/img/Navio/navio cruzeiro1.jpeg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top rounded-circle"> Cruzeiros & Turismo</a>
            <a href="../../Frontend/ComoViajar.html" class="btn btn-outline-light ms-auto">Voltar</a>
        </div>
    </nav>

    <main class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-primary shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Confirme seus Dados da Viagem</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info mb-4">
                            <strong>Tipo de Viagem Selecionado:</strong> <?php echo htmlspecialchars($tipo_label); ?>
                        </div>

                        <form method="POST" class="form-viagem">
                            <input type="hidden" name="tipo_viagem" value="<?php echo htmlspecialchars($tipo_viagem); ?>">

                            <!-- Nome Completo -->
                            <div class="form-group mb-3">
                                <label for="nome" class="form-label fw-bold">Nome Completo *</label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    id="nome" 
                                    name="nome" 
                                    placeholder="João da Silva"
                                    required
                                    minlength="3"
                                    maxlength="100"
                                >
                                <small class="text-muted">Mínimo 3 caracteres</small>
                            </div>

                            <!-- CPF -->
                            <div class="form-group mb-3">
                                <label for="cpf" class="form-label fw-bold">CPF *</label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    id="cpf" 
                                    name="cpf" 
                                    placeholder="000.000.000-00"
                                    required
                                    pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                                    title="Formato: 000.000.000-00"
                                >
                                <small class="text-muted">Formato: 000.000.000-00</small>
                            </div>

                            <!-- Data de Nascimento -->
                            <div class="form-group mb-3">
                                <label for="data_nascimento" class="form-label fw-bold">Data de Nascimento *</label>
                                <input 
                                    type="date" 
                                    class="form-control form-control-lg" 
                                    id="data_nascimento" 
                                    name="data_nascimento" 
                                    required
                                >
                                <small class="text-muted">Você precisa ter pelo menos 18 anos</small>
                            </div>

                            <!-- Forma de Pagamento -->
                            <div class="form-group mb-4">
                                <label for="forma_pagamento" class="form-label fw-bold">Forma de Pagamento *</label>
                                <select 
                                    class="form-select form-select-lg" 
                                    id="forma_pagamento" 
                                    name="forma_pagamento" 
                                    required
                                >
                                    <option value="">-- Selecione uma forma de pagamento --</option>
                                    <option value="cartao_credito">💳 Cartão de Crédito</option>
                                    <option value="cartao_debito">🏧 Cartão de Débito</option>
                                    <option value="pix">📱 Pix</option>
                                    <option value="boleto">📋 Boleto Bancário</option>
                                    <option value="transferencia">🏦 Transferência Bancária</option>
                                </select>
                            </div>

                            <!-- Resumo -->
                            <div class="alert alert-light border-2 mb-4">
                                <h5>📋 Próximo Passo:</h5>
                                <p class="mb-0">Após confirmar esses dados, você será redirecionado para <strong>reservar sua hospedagem</strong>.</p>
                            </div>

                            <!-- Botões -->
                            <div class="d-grid gap-2 d-sm-flex">
                                <button type="submit" class="btn btn-custom btn-lg flex-sm-grow-1">
                                    ✔️ Confirmar e Continuar
                                </button>
                                <a href="../../Frontend/ComoViajar.html" class="btn btn-outline-secondary btn-lg">
                                    ← Voltar
                                </a>
                            </div>
                        </form>

                        <?php if (isset($_SESSION['erro'])): ?>
                            <div class="alert alert-danger mt-4" role="alert">
                                <strong>Erro:</strong> <?php echo htmlspecialchars($_SESSION['erro']); ?>
                            </div>
                            <?php unset($_SESSION['erro']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p><strong>&copy;2025 Cruzeiros & Turismo - Todos os direitos reservados</strong></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Formatar CPF automaticamente
        document.getElementById('cpf').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) value = value.slice(0, 11);
            
            if (value.length > 0) {
                value = value.slice(0, 3) + (value.length > 3 ? '.' : '') + 
                        value.slice(3, 6) + (value.length > 6 ? '.' : '') + 
                        value.slice(6, 9) + (value.length > 9 ? '-' : '') + 
                        value.slice(9, 11);
            }
            e.target.value = value;
        });

        // Validar idade mínima
        document.getElementById('data_nascimento').addEventListener('change', function(e) {
            const dataNasc = new Date(e.target.value);
            const hoje = new Date();
            const idade = hoje.getFullYear() - dataNasc.getFullYear();
            const mesAtual = hoje.getMonth();
            const mesNasc = dataNasc.getMonth();
            
            if (mesAtual < mesNasc || (mesAtual === mesNasc && hoje.getDate() < dataNasc.getDate())) {
                idade--;
            }

            if (idade < 18) {
                alert('Você precisa ter pelo menos 18 anos para viajar.');
                e.target.value = '';
            }
        });
    </script>
</body>
</html>