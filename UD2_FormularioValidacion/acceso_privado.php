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
        /*$_GET
        $_POST*/
        echo "<h1>Acceso privado</h1>";
        echo "<h2>Valores recibidos</h2>";
        session_start();
        echo "<strong>Nombre: </strong>".$_SESSION['nombre']."<br>";
        echo "<strong>Email: </strong>".$_SESSION['email'];
    ?>
</body>
</html>