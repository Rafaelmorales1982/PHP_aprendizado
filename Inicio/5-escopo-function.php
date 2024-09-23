<?php
//Sobre escopo com função

 function soma() {
    $somar = 10 + 40;
    return $somar."<br/>";

 }

 echo soma();


 //função com parâmetros

 function media($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) /3;
    return $media."<br/>";
 }

 echo media(6, 7, 8);

 //Utilizar variáveis globais utilizando o comando "global"

 $salariBonus = 300;//variável global
 function bonificacao( $salario) {
    global $salariBonus;//dessa forma consegue utilizar variáveis globais
    $novoSalario = $salario + $salariBonus;
    return $novoSalario."<br/>";
 } 

 echo bonificacao(2000);

?>