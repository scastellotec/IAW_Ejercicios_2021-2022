<!--
Ejercicio 16
utiliza un bucle for-each para mostrar todos los valores del siguiente array asociativo de la
siguiente forma:
array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
"Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"
=> "Vienna", "Poland"=>"Warsaw");

ROME is the capital of ITALY.
[.... y el resto de ciudad del array asociativo ...]
Ten en cuenta que tendrás que utilizar una función que pase a mayúsculas las palabras.
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
        $planeta = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels","Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris","Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon","Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London","Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague","Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"=> "Vienna", "Poland"=>"Warsaw");

        foreach($planeta as $pais => $ciudad){
            echo "El pais $pais tiene como capital $ciudad <br/>";
        }

        echo "<h1>otro ejemplo 1</h1>";
        // el foreach aplicado a los numeros
        $numeros = [3,4,6,456,123,672,1];
        foreach($numeros as $num){
            echo "El numero que recupero es: $num <br/>";
        }
        
        echo "<h1>otro ejemplo 2</h1>";
        // el foreach aplicado a los numeros
        $numeros2 = [3=>'p',4 => 'sergio',6 =>'Julian'];
        foreach($numeros2 as $num => $nombre){
            echo "El numero que recupero es: $num y tiene el nombre $nombre<br/>";
        }
    ?>
</body>
</html>