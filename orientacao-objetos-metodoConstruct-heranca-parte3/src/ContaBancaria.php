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
abstract class ContaBancaria {
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    //utilizando metodo construtor não precisa de set e get
    public function __construct (
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo


    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo ;
        
    }

//adiciona um valor no saldo
public function depositar(float $valor): string
{
    $this-> saldo += $valor;
    return 'Depóssito de R$ ' . number_format($valor, 2, ',', '') . ' realizado';
}

//subtraindo pois é um saque bancario
public function sacar(float $valor): string
{
    $this-> saldo -= $valor;
    return 'Saque de R$ ' . number_format($valor, 2, ',', '') . ' realizado';

}

//exibindo o saldo restante
// public function obterSaldo(): string 
// {
//     return 'Seu saldo atual é R$ ' . number_format($this->saldo, 2, ',', '') . ' realizado';
    
// }


public abstract function obterSaldo(): string;


 public function getBanco(): string
 {
    return $this-> banco;
 }



//pegando valor
public function getnomeTitulo(): string 
{
    return $this-> nomeTitular;
}



//pegando valor
public function getnumeroAgencia(): string
{
    return $this-> numeroAgencia;
}



//pegando valor get
public function getnumeroConta(): string 
{
    return $this-> numeroConta;
}



//pegando valor conta get
public function getSaldo(): float
{
    return $this-> saldo;
}











    //criando array com uma função, método seguinifica comportamente

    // public function exibirDadosDaConta(): array{

    // return [
    //     'banco' => $this->banco,
    //     'nomeTitular' =>  $this-> nomeTitular,
    //     'numeroAgencia' => $this-> numeroAgencia,
    //     'numeroConta' => $this -> numeroConta,
    //     'saldo' => $this-> saldo,
      


    // ];



    // }





}
