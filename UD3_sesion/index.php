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
        session_start();

        /*$_SESSION['producto'] = 'Slimbook';
        $_SESSION['precio'] = '700';

        echo "<p>".$_SESSION['producto']."</p>";
        echo "<p>".$_SESSION['precio']."</p>";*/


        $producto2 = [
            "producto" => "Telefono movil",
            "precio en euros" => 100
        ];

        $_SESSION['p2'] = $producto2;

        echo "<p>".$_SESSION['p2']["producto"]."</p>";
        echo "<p>".$_SESSION['p2']["precio en euros"]."</p>";

        
        echo "<a href='otro2.php?id=".$_SESSION['p2']['producto']."'>adas</a>";
        //session_destroy();

    ?>
    
</body>
</html>