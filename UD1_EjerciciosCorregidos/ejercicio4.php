<!--
Ejercicio 4
Escribe un programa que utilizando el valor de una variable muestre un mensaje diferente
según su valor utilizando la instrucción if-else if-else
Si el valor de 0 a 24, incluidos, mostrará “Primera parte”
Si el valor de 25 a 49, incluidos, mostrará “Segunda parte”
Si el valor de 50 a 74, incluidos, mostrará “Tercera parte”
Si el valor de 100 a 75, incluidos, mostrará “Cuarta parte”
Si el valor no está dentro del rango 0 a 100, incluidos, mostrará “valor no permitido”.
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
        $nota = 5;
        /*
            Se puede sustituir && por and
            y || por or
        */
        if ($nota >=0 && $nota <= 24){
            echo "Primera parte";
        } else if ($nota >=25 && $nota<= 49){
            echo "Segunda parte";
        } else if ($nota >=50 && $nota<= 74){
            echo "Tercera parte";
        }  else if ($nota >=75 && $nota<= 100){
            echo "Cuarta parte";
        }else{
            echo "valor no permitido";
        }
    ?>
</body>
</html>