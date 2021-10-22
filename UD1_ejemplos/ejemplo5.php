<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    Muestra el valor 1 si $x es igual a la variable $y
    Muestra el valor 2 si $x es mayor que $y
    cualquier otro caso muestra el valor 3
    -->
    <?php
        $letras = ["s","a","v","c"];

        echo $letras[0]."<br>";
        echo $letras[1]."<br>";
        echo $letras[2]."<br>";

        echo "<h2>ota cosa</h2>";

        for($i=0; $i<count($letras); $i++){
            echo $letras[$i]."<br>";
        }

        echo "<h2>ota cosa</h2>";
        foreach($letras as $j){
            echo $j."<br>";
        }



    ?>
    <h3>asociativos</h3>
    <?php
        $animales = [
            "Muffinhead" => 14,
            "Peter" => 4,
            "Monnie" => 7,
            "Banh" => 10
        ];

        foreach($animales as $nombre => $edad) {
            echo $nombre." tiene ".$edad;
            echo "<br>";
          }

    ?>
</body>
</html>