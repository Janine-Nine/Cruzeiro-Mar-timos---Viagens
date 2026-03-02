CREATE DATABASE cruzeiros_turismo;
USE cruzeiros_turismo;

CREATE TABLE pagamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    destino VARCHAR(100),
    forma_pagamento VARCHAR(50),
    data_pagamento TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    mensagem TEXT,
    data_contato TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE hospedagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    destino VARCHAR(100),
    tipo_hospedagem VARCHAR(50),
    data_reserva TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);