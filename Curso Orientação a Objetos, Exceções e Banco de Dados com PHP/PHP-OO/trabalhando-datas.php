<?php
    //Trabalhando com a função date()

    echo date('d/m/Y'). PHP_EOL;//mostra data atual


    
    //Instanciando criando objeto data

    $data = new DateTime();
    echo $data->format('d/m/Y H:i:s');//formatando a data


    /* Tabaela para utilizar datas e horas
    -> P representação de período: vem antes de dia, mês, anos e semanas
    Y anos
    M meses
    D dias
    W semanas

    -> T representação de tempo: vem antes de hora, minuto e segundo
    H horas
    M minutos
    S segundos

    */

    $intervalo = new DateInterval('PT5M');//criando um intervalo 5 minutos 
    $data->add($intervalo); //adiciona mais 5 minutos
    
    var_dump($data);

    $data->sub($intervalo);//subtraindo menos 5 minutos

    var_dump($data);




?>