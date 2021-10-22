<!--
Ejercicio 12
Dada una frase almacenada en una variable:
● muestra por pantalla la frase.
● Debajo muestra la frase en orden inverso. Utiliza un bucle.
● Muestra debajo el tamaño de la frase. El número de caracteres, contando espacios.
● Muestra la frase en mayúsculas utilizando una función. strtoupper()
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
        $frase = "que tal";

        echo "<h1>Muestra frase</h1>";
        echo $frase;

        echo "<h1>Frase en orden</h1>";
        echo "<p>La frase mide: ".strlen($frase)."</p>";
        //echo $frase[0].$frase[1].$frase[2].$frase[3].$frase[4];
        // strlen me devuelve el tamaño de la cadena de texto
        for($i=0; $i<strlen($frase); $i++){
            echo "<p>".$frase[$i]."</p>";
        }

        echo "<h1>Frase inverso</h1>";
        for($i=strlen($frase)-1; $i>=0; $i--){
            echo "<p>".$frase[$i]."</p>";
        }

        echo "<h1>Tamaño de la frase</h1>";
        echo strlen($frase);

        echo "<h1>Frase en mayusculas</h1>";
        echo strtoupper($frase);
    ?>
</body>
</html>