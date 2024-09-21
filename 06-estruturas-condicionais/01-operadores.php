<?php
//Operadores  &&, !=, !==, and, or, xor,||

/* 
Resumo das Diferenças:
OR retorna true se qualquer uma das condições for verdadeira.
XOR retorna true se apenas uma das condições for verdadeira.
NOR retorna true se todas as condições forem falsas.
*/
$bool1 = true && false; //false
var_dump($bool1);//verifica o tipo

//var_dump A função exibe o tipo de dado

$bool2 = (true and false); //false
var_dump($bool2);//verifica o tipo
?>