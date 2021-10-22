<!--
Ejercicio 13
Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una
imagen con la cara o la cruz de la moneda.
Utiliza: la función rand y un elemento de imagen <img> en HTML.
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
        $numero = rand(0, 1);
        if ($numero == 0){
            echo '<img src="cara.PNG"/>';
        }else{
            echo '<img src="cruz.PNG"/>';
        }
    ?>
</body>
</html>