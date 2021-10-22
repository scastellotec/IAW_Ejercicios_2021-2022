<!--
Ejercicio 15
Escribe un script PHP que realice las siguientes acciones:
● Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
● Una vez que ha inicializado el array, imprimir todos los valores que almacena.
● Mostrar el valor medio
● Muestra el valor mas alto y el más bajo
Resuelve el ejercicio usando bucles for, while, do-while y for-each
Después utiliza la función sort y rsort para mostrar los valores en orden creciente y
decreciente.
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
        // Genero el array
        for($i=0; $i<10; $i++){
            $numeros[] = rand(1,30);
        }

        echo "<h1>Los valores del array</h1>";

        // imprimo el array. Tambien valdria el var_dump()
        for($i=0; $i<count($numeros); $i++){
            echo $numeros[$i]."; ";
        }

        echo "<h1>El valor medio</h1>";
        $valormedio = 0;
        for($i=0; $i<count($numeros); $i++){
            $valormedio += $numeros[$i];
            //$valormedio = $valormedio + $numeros[$i]; Es lo mismo que arriba
        }
        echo "Valor medio es: ".$valormedio/10;

        echo "<h1>El valor máximo</h1>";
        $valormaxtemporal = 0;
        for($i=0; $i<count($numeros); $i++){
            if($valormaxtemporal < $numeros[$i]){
                $valormaxtemporal = $numeros[$i];
            }
        }
        echo "Valor max es: ".$valormaxtemporal;

        echo "<h1>El valor mínimo</h1>";
        $valormin = 30;
        for($i=0; $i<count($numeros); $i++){
            if($valormin > $numeros[$i]){
                $valormin = $numeros[$i];
            }
        }
        echo "Valor min es: ".$valormin;

        echo "<h1>Probamos funciones</h1>";
        echo "Valor max: ".max($numeros)."<br>";
        echo "Valor min: ".min($numeros)."<br>";
        echo "Valor sumatorio: ".array_sum($numeros)."<br>";
        echo "Valor medio: ".array_sum($numeros)/count($numeros)."<br>";

    ?>
</body>
</html>