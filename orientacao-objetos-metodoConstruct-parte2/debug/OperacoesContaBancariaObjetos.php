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

echo $conta -> obterSaldo(). "<br/>";//0


//depositando um valor
echo $conta-> depositar(50). "<br/>";//50


echo $conta -> obterSaldo(). "<br/>";//0


echo $conta -> sacar(25). "<br/>"; //25


echo $conta-> obterSaldo(). "<br/>";//25




?>