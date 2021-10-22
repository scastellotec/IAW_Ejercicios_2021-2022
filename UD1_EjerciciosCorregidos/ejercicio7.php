<!--
Ejercicio 7
Escribe un programa que dado el valor de una variable dibuje un tablero cuadrado de
ajedrez. Utiliza las etiquetas <table> <tr> <td> y la propiedad bgcolor=”#FFFFFF” o
bgcolor=#000000
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
        $lado = 8;

        echo '<table border="1" width="200" height="200">';

            for($i=0; $i<$lado; $i++){
                echo "<tr>";
                for ($j=0; $j<$lado; $j++){
                    if($i%2 == 0 && $j%2 == 0){ # si la fila es par y la columna es par
                        echo "<td bgcolor='black'></td>";
                    } else if ($i%2 != 0 && $j%2 != 0){ #si la fila es impar y la columna es impar
                        echo "<td bgcolor='black'></td>";
                    } else{ # cualquier otro caso
                        echo "<td bgcolor='white'></td>";
                    }
                }
                echo "</tr>";
            }

        echo '</table>';


        echo "<h1>Otra forma 2</h1>";
        echo '<table border="1" width="200" height="200">';

            for($i=0; $i<$lado; $i++){
                echo "<tr>";
                for ($j=0; $j<$lado; $j++){
                    if ($i%2==0){
                        if ($j%2 == 0){
                            echo "<td bgcolor='blue'></td>";
                        }else{
                            echo "<td bgcolor='white'></td>";
                        }
                    }else{
                        if ($j%2 == 0){
                            echo "<td bgcolor='white'></td>";
                        }else{
                            echo "<td bgcolor='blue'></td>";
                        }
                    }

                }
                echo "</tr>";
            }

        echo '</table>';

        echo "<h1>Otra forma 3</h1>";
        echo '<table border="1" width="200" height="200">';

            for($i=0; $i<$lado; $i++){
                echo "<tr>";
                for ($j=0; $j<$lado; $j++){
                    if (($i%2 == 0 && $j%2 == 0) || ($i%2 != 0 && $j%2 != 0)){ 
                        echo "<td bgcolor='red'></td>";
                    } else{ # cualquier otro caso
                        echo "<td bgcolor='white'></td>";
                    }
                }
                echo "</tr>";
            }

        echo '</table>';
    ?>
</body>
</html>