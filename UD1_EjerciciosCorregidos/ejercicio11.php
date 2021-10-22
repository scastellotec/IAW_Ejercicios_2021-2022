<!--
Ejercicio 11
El juego de FizzBuzz. Muestra del 1 al 30 el resultado del juego FizzBuzz. Se mostrará el
número por pantalla, salvo cuando el número sea múltiplo de 3 que se mostrará “Fizz”, o
cuando sea múltiplo de 5 se mostrará “Buzz'', cuando sea múltiplo de 3 y 5 se mostrará
“FizzBuzz”.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Otra forma de hacerlo tambien correcta
        /*for($i=1; $i<30; $i++){
            if($i%3==0 && $i%5==0){
                echo "FizzBuzz<br/>";
            } else if($i%5==0){
                echo "Buzz<br/>";
            } else if($i%3==0){
                echo "Fizz<br/>";
            } else {
                echo $i."<br/>";
            }
        }*/
        /* Una forma de hacerlo mas optimizada
         $resultado = $resultado."Fizz";
            es equivalente a
         $resultado .= "Fizz";
         */
        for($i=1; $i<=30; $i++){
            $resultado = "";

            if ($i%3==0){ $resultado .= "Fizz";}
            if ($i%5==0){ $resultado .= "Buzz";}
            if($resultado == ""){$resultado = $i;}

            echo $resultado."<br/>";
        }

    ?>
</body>
</html>