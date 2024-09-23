<?php
require __DIR__ . '/../vendor/autoload.php';

use Rafael\MeuSite\ContaBancaria;


//dessa forma utiliza com metodo construtor
$conta = new ContaBancaria(
 'Banco inter', //banco
 'Rafael Morales', //nomeTitular
 '8244', //numeroAgencia
 '57354-10', //numeroConta
 0

);


var_dump($conta -> exibirDadosDaConta() );


?>