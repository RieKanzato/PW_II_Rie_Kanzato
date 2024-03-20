<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exercicio</title>
    </head>
    <body>
    <?php

        $altura = 1.63;
        $peso = 49;
        $imc = $peso/($altura **2);

        echo "peso:", $peso, "<br>";
        echo "<br> altura", $altura, "<br>";
        echo "<br> imc:", $imc, "<br>";

        if ($imc < 18.5){
            echo "<br> classificação: baixo peso";
        }elseif ($imc < 24.99){
            echo "<br> classificação: normal";
        }elseif($imc  30){
            echo "<br> classificação: sobrepeso";
        }else{
            echo "<br> classificação: obesidade";
        }
    ?>

    </body>
</html>