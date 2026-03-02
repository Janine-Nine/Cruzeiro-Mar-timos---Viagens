<?php
require_once '../models/Contato.php';
require_once '../controllers/ContatoController.php';

header('Content-Type: application/json');

ContatoController::processar();