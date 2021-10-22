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
            if (filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL) == false){
                // los mensajes de error
                echo "<strong>Email incorrecto </strong><br>";
            } else{
                session_start();
                $_SESSION['nombre'] = $_REQUEST['nombre'];
                $_SESSION['email'] = $_REQUEST['email'];

                //si todo valido nos dirigimos a la web
                // Me falta enviarle la infor del formulario
                header('Location: acceso_privado.php');
            }
        }
    ?>
    
    <form action="formulario.php" method="post">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" id="nombre" name="nombre" value="<?php if(isset($_REQUEST["nombre"])){
                                                                        echo $_REQUEST["nombre"];
                                                                    } ?>"><br>
        <label for="email">Correo electronico:</label>
        <input type="text" id="email" name="email" value="<?php if(isset($_REQUEST["email"])){
                                                                        echo $_REQUEST["email"];
                                                                    } ?>"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>