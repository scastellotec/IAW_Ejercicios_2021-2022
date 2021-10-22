<!--
Ejercicio 18
Escribe una función llamada calcular_media que reciba un array como parámetro de
entrada y que devuelva la media de todos los valores que contiene.
https://www.php.net/manual/es/functions.returning-values.php
Escribe una función llamada calcular_maximo que reciba un array como parámetro
de entrada y que devuelva cuál es el máximo valor del array.
Escribe una función llamada calcular_minimo que reciba un array como parámetro
de entrada y que devuelva cuál es el mínimo valor del array.
Escribe una función llamada imprimir_array que reciba un array como parámetro de
entrada y muestre su contenido en una tabla con dos columnas. La primera columna
mostrará la posición del array y la segunda el valor que hay en esa posición.
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

        function calcular_media($valores){
            $resultado = array_sum($valores)/count($valores);
            return $resultado;
        }

        function calcular_maximo($valores){
            $resultado = max($valores);
            return $resultado;
        }

        function calcular_minimo($valores){
            $resultado = min($valores);
            return $resultado;
        }

        function imprimir_array($valores){
            for($i=0; $i<count($valores); $i++){
                echo $valores[$i]."; ";
            }
        }
        
        // Genero el array
        for($i=0; $i<10; $i++){
            $numeros[] = rand(1,30);
        }

        echo "<h1>Mi array en functions</h1>";
        echo imprimir_array($numeros);

        echo "<ul>";
        echo "<li>".calcular_maximo($numeros)."</li>";
        echo "<li>".calcular_media($numeros)."</li>";
        echo "<li>".calcular_minimo($numeros)."</li>";
        echo "</ul>";
    ?>
</body>
</html>