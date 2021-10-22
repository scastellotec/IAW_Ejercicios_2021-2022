<!--
Ejercicio 6
Escribe un programa que muestre los números de 5 al 15 utilizando un bucle for, y repitelo
con un bucle while. Utiliza la etiqueta <br> para los saltos de línea.
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
        echo "<h1>Ejemplo con FOR</h1>";
        for ($i=5; $i<16; $i++){
             echo "<p>$i</p>";
        }

        echo "<h1>Ejemplo con WHILE</h1>";
        $j = 5;
        while($j<16){
            echo "<p>$j</p>";
            $j++;
        }

        echo "<h1>Ejemplo con John</h1>";
        $j = 5;
        while($j<16){
            echo "<p>".++$j."</p>";
        }

    ?>
</body>
</html>