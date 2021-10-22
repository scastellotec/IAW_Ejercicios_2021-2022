<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <h1>Titulo de la pagina</h1>
    <p>Ahora utiliza PHP</p>
    
        <?php

        $num1 = '4';
        $num2 = 5;
        
        echo "<p>Numero 1: $num1</p>";
        echo "<p>Numero 2: $num2</p>";

        echo "<p>Resultado: ".$num1+$num2."</p>";

        ?>

</body>
</html>