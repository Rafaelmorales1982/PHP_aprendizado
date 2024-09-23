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





}
