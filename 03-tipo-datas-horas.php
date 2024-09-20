<?php
    echo date("d")."<br/>";//mostra o número do dia
    echo date("D")."<br/>";//mostra o dia da semana 
    echo date("m")."<br/>";//mostra o número do mês
    echo date("M")."<br/>";//mostra o mês que estamos
    echo date("y")."<br/>";// mostra o ano em número 24
    echo date("Y")."<br/>";// mostra o ano que estamos 2024

    //dia-mês-ano
    echo date("d/m/y")."<br/>";

    //mostrando a hora 
    //temos que configurar para mostrar a hora no Brasil utilizando a função abaixo
 date_default_timezone_set('America/Sao_Paulo');
 //hora-minutos e segundos
 echo date("H:i:s")."<br/>";

 $dataHora = date("d/m/y H:i:s");
 echo $dataHora;

?>