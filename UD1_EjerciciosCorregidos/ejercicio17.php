<!--
Ejercicio 17
Escribe una función que reciba un número como parámetro de entrada y que
imprima su tabla de multiplicar.
https://www.php.net/manual/es/functions.user-defined.phps
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
        /* Ejemplo uno de funciones */ 
        function imprimeTabla($numero){
            echo "<h1>tabla del $numero</h1>";
            for ($i=1; $i<11; $i++){
                echo $numero." x ". $i . " = ". $numero*$i."<br>";
            }
        }

        imprimeTabla(1);

        /* Ejemplo de funciones con devolucion */
        function suma($n1, $n2){
            $resultado = $n1 + $n2;
            return $resultado;
        }

        function resta($n1, $n2){
            $resultado = $n1 - $n2;
            return $resultado;
        }

        echo "<h1>Prueba ed la suma</h1>";
        echo suma(14,5)."<br>";
        echo resta(14,5)."<br>";
        echo resta(5,14);


    ?>
</body>
</html>