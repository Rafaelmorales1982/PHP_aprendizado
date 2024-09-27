<?php
declare(strict_types=1);

//pegando connect.php
$pdo = require 'connect.php';

//variável recebe o insert
$sql = 'insert into produtos(descricao) values(?)';
//O método prepare() prepara uma consulta SQL para ser executada no banco de dados,
$prepare = $pdo->prepare($sql);
// Vincula o valor de $_GET['descricao']
$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

//$prepare->rowCount(): Este método retorna o número de linhas afetadas pela última instrução SQL executada.
echo $prepare->rowCount();
