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
    <title>Pacotes de Cruzeiro - Cruzeiros & Turismo</title>
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
        <h1 class="main-title">Pacotes de Cruzeiro 🚢</h1>
        <p class="lead">Você escolheu viajar de <strong>CRUZEIRO</strong></p>
        
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">Vantagens:</h4>
            <ul>
                <li>Luxo e conforto máximo</li>
                <li>Refeições gourmet inclusas</li>
                <li>Entretenimento a bordo</li>
                <li>Excelente relação custo-benefício</li>
                <li>Conheca vários destinos em uma viagem</li>
            </ul>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card pacote-card">
                    <div class="card-body">
                        <h5 class="card-title">Caribe - 7 Noites</h5>
                        <p class="card-text">Cruzeiro all-inclusive com festas temáticas</p>
                        <p class="preco">R$ 9.800</p>
                        <a href="../../Frontend/pagamento.html" class="btn btn-custom">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card pacote-card">
                    <div class="card-body">
                        <h5 class="card-title">Maldivas - 10 Noites</h5>
                        <p class="card-text">Bangalôs flutuantes e spa exclusivo</p>
                        <p class="preco">R$ 19.900</p>
                        <a href="../../Frontend/pagamento.html" class="btn btn-custom">Reservar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card pacote-card">
                    <div class="card-body">
                        <h5 class="card-title">Havaí - 7 Noites</h5>
                        <p class="card-text">Cruzeiro de luxo com atividades aquaticas</p>
                        <p class="preco">R$ 12.900</p>
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