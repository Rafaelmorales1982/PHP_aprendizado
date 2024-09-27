<?php
declare(strict_types=1);

$pdo = null;

try {
    // Fazendo conexão ao banco
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');

    // Configurando atributos do PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Captura de erro mais específica
    echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
    die();
}

return $pdo;
?>