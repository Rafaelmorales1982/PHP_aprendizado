<?php
//Declarações de arrays
$array = array(
    "Chave" => "Valor",
);


//Apartir da versão do PHP 5.4
$array = [
    "Chave" => "Valor",
];


//Pegar a versão a partir 5.4

$carros = [
    'Ferrari',
    'BMW',
    'Mercedes',

];

$endereco = [
    "cep" => "87960000",
    "numero" => "1516",
    "cidade" => "Marilena",
    "estado" => "Paraná",
];


$enderecoPessoas = [
    'pessoa1' => [
        "nome" => "Rafael",
        "cep" => "87960000",
        "cidade" => "Marilena",
    ],

    'pessoa2' => [
        "nome" => "Elaine",
        "cep" => "87970000",
        "cidade" => "Nova Londrina",
    ],

];

print_r($carros[2] . "\n");
print_r($endereco['cep'] . "\n");

//resultado do array multidimencional
//Em PHP, isset() é uma função usada para verificar se uma
// variável está definida
if(isset($enderecoPessoas['pessoa1']['nome'])){
    print_r($enderecoPessoas['pessoa1']['nome']);
}else{
    echo "Chave inválida!";
}

