<?php

require __DIR__ . ' /../vendor/autoload.php';

use Rafael\MeuSite\ContasTipo\ContaPoupanca;

$conta = new ContaPoupanca (
    'Banco do Brasil',//banco
    'Rafael Lima', //nomeTitular
    '8244', //numeroAgencia
    '57354-10', //numeroConta
    0,//saldo

);

echo $conta->obterSaldo(). "<ph/>";

echo $conta -> depositar(50. )
