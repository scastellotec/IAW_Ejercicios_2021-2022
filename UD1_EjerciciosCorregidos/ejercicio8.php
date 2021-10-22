<!--
Ejercicio 8
Escribe un programa que dado una altura dibuje el numero de pisos de *. Tendrás que
utilizar bucles anidados.
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
        $nivel = 4;

        for($altura=0; $altura<$nivel; $altura++){
            for ($ancho=0; $ancho<=$altura; $ancho++){
                echo "*";
            }
            echo "<br/>";
        }
    ?>
</body>
</html>