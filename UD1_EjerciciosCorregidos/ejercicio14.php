<!--
Ejercicio 14
    Escribe un script PHP que realice las siguientes acciones:
    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprimir todos los valores que almacena.
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

        for($i=0; $i<10; $i++){
            $numeros[] = rand(1,30)."<br>";
        }

        var_dump($numeros);
    ?>
</body>
</html>