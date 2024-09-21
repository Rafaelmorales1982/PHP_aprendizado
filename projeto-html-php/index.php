<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Simples PHP</title>
</head>

<body>
    <!-- Revisando tipos de dados String, Números e arrays-->

    <?php
    $curso = "Curso na DIO";
    $numeros = 50;
    $real = "Reais";
    $array = array("PHP", "JAVASCRIPT", "CSS", "HTML");
    //definir primeiro a função time-zone para São Paulo
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("d/m/Y H:i:s");
    ?>
    <h4>
        Essa é uma variável do tipo String,
        para implementar <br /> uma variável do tipo string
        utilizamos aspas ('') ou (""):
        <br />
        <?php
        echo "Estou estudando o $curso" . "<br/>";

        ?>
    </h4>
    <h4>
        Esssa é uma variável do tipo números/ integer
        <br />
        <?php
        echo "O Valor mensal do $curso é $numeros $real" . "<br/>";

        ?>
    </h4>

    <h4>
        Essa é uma variável com um array,<br /> para implementar
        um array em uma variável utilizamos desta forma: <br />
        -> $array = array("PHP", "CSS", JAVASCRIPT); <br>
    </h4>

    <?php
     print_r($array);

    ?>

    <h4>
        Vamos agora implementar uma variável do tipo datas, 
        utilizamos um função própria do PHP: <br>
        -> $data = date("d/m/Y H:i:s");

    <?php
    echo $data;

    ?>

    </h4>
</body>

</html>