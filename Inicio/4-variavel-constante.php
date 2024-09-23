<?php
//Atividade com constante
/**
 * Entregador de delivery ganha 80 reais por dia porém
 * ainda tem as gorjetas dos clientes
 */
//as constantes quando contém valor não pode ser alteradas
    define("valorDia", "80");
    define("gorjetas","20");
    define("teste",valorDia + gorjetas);
   

    echo "Valor é desse jeito: ",teste;


 ?>