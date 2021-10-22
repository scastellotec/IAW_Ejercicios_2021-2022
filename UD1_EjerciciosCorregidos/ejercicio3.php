<!--
Ejercicio 3
Escribe un programa que muestre el mensaje de dos variables utilizando una sola
instrucción echo.
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
        $nombre = "Sergio";
        $frase = " trabaja en el IES Pablo Serrano";
        echo $nombre . $frase; # una forma de resolver
        echo $nombre . " " . $frase; # otra tambien valida
    ?>
</body>
</html>