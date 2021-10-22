<!--
Ejercicio 19
Crea un archivo llamado funciones.php que contenga todas las funciones creadas
en los ejercicios anteriores. Escriba un otro archivo PHP que incluya el archivo
funciones.php y haga uso de cada una de ellas.
https://www.php.net/manual/es/function.include.php
https://www.php.net/manual/es/function.require.php
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
        include('ejercicio19_include.php');
        
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

        include('ejercicio19_footer.php');
    ?>
</body>
</html>