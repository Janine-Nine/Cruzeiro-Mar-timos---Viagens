<?php
require_once '../controllers/PagamentoController.php';

header('Content-Type: application/json');

PagamentoController::processar();