<?php

//criando uma classe Venda
class Venda
{
    private $produto;
    private $quantidade;
    private $data;
    private $valorTotal;



    //criando um método construtor
    public function __construct($produto, $quantidade, $data, $valorTotal)
    {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->data = $data;
        
        $this->valorTotal = $valorTotal;
    }



    //método  comprar
    public function comprar( $quantidade, $valor)
    {

        $this->quantidade = $quantidade;
        $this-> valorTotal = $valor * $quantidade;
        return 'Nome produto : ' . $this->produto . ' quantidade : ' . $this->quantidade . ' Valor total R$: ' .$this->valorTotal;


    }


}

$venda1 = new Venda(


    'PS5', //PRODUTO
    0, //QUANTIDADE
    date('d/m/Y H:i:s'), //DATA DA VENDA
    0, //valor
);

echo $venda1->comprar(2, 4000.00);
