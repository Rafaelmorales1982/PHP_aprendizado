<?php
    declare(strict_types=1);

    // Selecionando a connect.php
    $pdo = require 'connect.php';
    $sql = 'SELECT * FROM produtos';

    // Falta o ponto e vírgula aqui
    echo '<h3>Produtos: </h3>'; 

    // Adicionando chaves no foreach
    foreach ($pdo->query($sql) as $key => $value) {
        echo 'Id:' . $value['id'] . '<br/> descrição: ' . $value['descricao'] . '<hr>';
    }
?>