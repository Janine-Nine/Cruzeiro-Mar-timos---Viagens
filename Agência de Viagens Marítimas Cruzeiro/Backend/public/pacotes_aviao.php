<?php
session_start();

if (!isset($_SESSION['tipo_viagem'])) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacotes de Avião - Cruzeiros & Turismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Frontend/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../Frontend/index.html">Cruzeiros & Turismo</a>
            <a href="../../Frontend/ComoViajar.html" class="btn btn-outline-light">Voltar</a>
        </div>
    </nav>

    <main class="container mt-5">
        <h1 class="main-title">Pacotes de Avião ✈️</h1>
        <p class="lead">Você escolheu viajar de <strong>AVIÃO</strong></p>
        
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Vantagens:</h4>
            <ul>
                <li>Rápido e direto ao destino</li>
                <li>Menos tempo de viagem</li>
                <li>Ideal para quem tem pressa</li>
                <li>Conforto em primeira classe</li>
            </ul>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card pacote-card">
                    <div class="card-body">
                        <h5 class="card-title">Havaí - Estados Unidos</h5>
                        <p class="card-text">Voo direto com transfer incluso</p>
                        <p class="preco">R$ 2.500</p>
                        <a href="../../Frontend/pagamento.html" class="btn btn-custom">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card pacote-card">
                    <div class="card-body">
                        <h5 class="card-title">Cancún - México</h5>
                        <p class="card-text">Voo com conexão em Miami</p>
                        <p class="preco">R$ 1.800</p>
                        <a href="../../Frontend/pagamento.html" class="btn btn-custom">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-5">
        <p><strong>&copy;2025 Cruzeiros & Turismo - Todos os direitos reservados</strong></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>