<!--
Ejercicio 5
Escribe un programa que dado un numero del 1 al 7 te devuelva el día de la semana. Si no
es ninguno de esos números mostrará “Número incorrecto”. Se debe utilizar la instrucción
switch o match.
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
        $dia = 2;

        switch ($dia){
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miercoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "sabado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "valor no permitido";
                break;
        }

        echo "<h1>ejemplo con match</h1>";

        $resultado = match(true) {
            $dia == 1 => "Lunes",
            $dia == 2 => "Martes",
            $dia == 3 => "Miercoles",
            $dia == 4 => "Jueves",
            $dia == 5 => "Viernes",
            $dia == 6 => "sabado",
            $dia == 7 => "Domingo",
        };
        echo $resultado;

        
    ?>
</body>
</html>