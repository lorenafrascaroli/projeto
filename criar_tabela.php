<?php
require 'conexao.php';

try {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS usuarios (
            id SERIAL PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            senha VARCHAR(255) NOT NULL,
            cpf VARCHAR(14) NOT NULL,
            telefone VARCHAR(15) NOT NULL
        )
    ");
    echo "Tabela usuarios criada (ou já existia). O banco está funcionando!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}