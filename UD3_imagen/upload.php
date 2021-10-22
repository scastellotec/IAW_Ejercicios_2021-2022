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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Esto me lo da el formulario al subir el archivo. fileToUpload es el name del input.
            $fichero_subido = "uploads/" . basename($_FILES["fileToUpload"]["name"]); 

            // Muevo el archivo de la carpeta temporal a la definitiva
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fichero_subido)) {
                // Mensaje de confirmación donde todo ha ido bien
                echo '<p>Se subió perfectamente a la ruta: '. $fichero_subido .'</p>';
                echo '<p><img width="500" src="' . $fichero_subido . '"></p>';

                /*
                    1. Me conecto a la base de datos
                    2. En el campo nombre pongo $fichero_subido
                */
                echo $_REQUEST["id"]."<br>";
                echo $_REQUEST["titulo"]."<br>";

                // INSERT INTO Productos value ($id, $titulo,$fichero_subido )
                // <img src="$nombre_archov">
            } else {
                // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
                echo '<p>¡Ups! Algo ha pasado.</p>';
            }
        }
    ?>
</body>
</html>
