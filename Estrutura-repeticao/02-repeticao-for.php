<?php
    $carros = [
        "Fusca",
        "Mercedes",
        "Corolla",
        "Jeep"
    ];

    $meusCarros = count($carros);

    for($i = 0; $i < $meusCarros; $i++){
        echo $carros[$i] . "<br>";  // Usando echo para imprimir cada carro
    }
?>