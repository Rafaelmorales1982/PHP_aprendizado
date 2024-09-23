<?php

/**
 * A declaração declare(strict_types = 1); no 
 * início de um script em PHP ativa o modo de
 *  verificação 
 * de tipos estritos (strict typing). 
 * Isso significa que, ao passar argumentos
 *  para funções e métodos, o PHP exigirá que 
 * os tipos dos valores correspondam
 *  exatamente ao que é especificado nas
 *  assinaturas das funções.
 * 
 * 
 */

declare(strict_types=1);//

namespace Rafael\MeuSite;
//criando objetos
class ContaBancaria {
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    //criando array com uma função, método seguinifica comportamente

    public function exibirDadosDaConta(): array{

    return [
        'banco' => $this->banco,
        'nomeTitular' =>  $this-> nomeTitular,
        'numeroAgencia' => $this-> numeroAgencia,
        'numeroConta' => $this -> numeroConta,
        'saldo' => $this-> saldo,
      


    ];



    }

 //setando os valores function setBanco
 public function setBanco(string $banco): void 
 {
    //retorna void vazio apenas seta
    $this -> banco = $banco;
 }

 public function getBanco(): string
 {
    return $this-> banco;
 }

 //setando nomeTitular
 public function setnomeTitular(string $nomeTitular): void 
 {
    $this-> nomeTitular = $nomeTitular;
 }

//pegando valor
public function getnomeTitulo(): string 
{
    return $this-> nomeTitular;
}

//setando numeroAgencia
public function setnumeroAgencia(string $numeroAgencia): void 
{
    $this -> numeroAgencia = $numeroAgencia;

}

//pegando valor
public function getnumeroAgencia(): string
{
    return $this-> numeroAgencia;
}

//setando numeroConta
public function setnumeroConta(string $numeroConta): void 
{
    $this -> numeroConta = $numeroConta;
}

//pegando valor get
public function getnumeroConta(): string 
{
    return $this-> numeroConta;
}

//setando saldo
public function setSaldo(float $saldo): void 
{
    $this -> saldo = $saldo;
}

//pegando valor conta get
public function getSaldo(): float
{
    return $this-> saldo;
}

}
