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
             $n1 = 0;
             $n2 = 1;

                for ($i = 0; $i < 8; $i++){

                    echo "$n1";
                    $n1 = $n1 + $n2;
                    $n2 = $n1 - $n2;
                }

            ?>

        </body>
</html>