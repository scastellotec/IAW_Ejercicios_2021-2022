<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 
        'Viernes', 'Sabado', 'Domingo'];

        //var_dump($semana);
        echo "<ul>";
        echo "<li>$semana[0]</li>";
        echo "<li>$semana[1]</li>";
        echo "<li>$semana[2]</li>";
        echo "<li>$semana[3]</li>";
        echo "<li>$semana[4]</li>";
        echo "<li>$semana[5]</li>";
        echo "<li>$semana[6]</li>";
        echo "<li>$semana[7]</li>";
        echo "</ul>";
    ?>

    <!--
        array(7) { 
            [0]=> string(5) "Lunes" 
            [1]=> string(6) "Martes" 
            [2]=> string(9) "Miercoles" 
            [3]=> string(6) "Jueves" 
            [4]=> string(7) "Viernes" 
            [5]=> string(6) "Sabado" 
            [6]=> string(7) "Domingo" }
    -->
</body>
</html>