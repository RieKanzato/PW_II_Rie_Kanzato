<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            $n1 = 5;
            $n2 = 10;

         //ex1
            function soma($n1, $n2){
                $soma = $n1 + $n2;
                return $soma;
        }

        //ex2
            function areaTriangulo($base, $altura){
                $areaTriangulo = ($base * $altura) / 2;
        }

        //ex3
            $array = arrayI(1, 2, 3, 4, 5);
                function arrayI($array) {
                return end($array)
        }

        //ex4
            $numeros = array (1,3,5,62,9);

                if (in_array(62, $numeros)) {
                echo ("este numero está no array")
            } else {
                echo ("este numero não esta no array")
        }

        //ex5
            array(
                "galinha" => 2,
                "vaca" => 4,
                "porco" => 4,
        );
            function numPerna($animais) {
                $n1 = $animais["galinha"] + $animais["vaca"] + $animais["porco"];
                return $n1
        }
            $n1 = 1;
            $n2 = 2;
            $n3 = 3;

        //ex6
            function MenorNum($n1, $n2, $n3) {

                return min($n1, $n2, $n3);
        }  
            $n1 = 4;
            $n2 = 5;
            $n3 = 6;

        //ex7
            function menorN($n1, $n2, $n3){
                min(array)  
            }
            echo menorN(array);

        //ex8
            function faltaN($A, $n){
                for ($i - 0; $i < 1$n; $i++ )
                if($A[$i] != ($i + 1))
                return ($i + 1);

                return $n + 1;
                }
            
                $A = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                $n = sizeof($A);
                echo faltaN($A, $n);

        //ex9
            function Natal(){
                $hoje = date('d/m');
            
                if ($hoje == "25/12") {
                    return true;
                } else {
                    return false;
                }
            }
            echo Natal();

        //ex10
            function validarEmail($email) {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return "o email é válido";
                } else {
                    return "o email é inválido";
                }
            }
        
        
            $email = "exemplo@dominio.com";
            echo validarEmail($email)
        ?>
    </pre>
</body>
</html>
