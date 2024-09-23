<?php
require __DIR__ . '/../vendor/autoload.php';

use Rafael\MeuSite\ContaBancaria;

$conta = new ContaBancaria();

$conta -> setBanco("Banco do Brasil");
$conta -> setnomeTitular("Rafael Morales");
$conta -> setnumeroAgencia("8244");
$conta -> setnumeroConta("57354-10");
$conta -> setSaldo(0);

var_dump($conta -> exibirDadosDaConta() );


?>