<?php
    /*
    1. Recoger los valores del usuario
    2. Conectarme a la bbdd
    3. Crear la sentencia UPDATE ..
    4. Ejecutamos
    5. Nos dirija a la pagina de index.php
    */

    $prod = $_REQUEST["producto"];
    $unid = $_REQUEST["unidades"];
    $id = $_REQUEST["id"];

    $mysqli = new mysqli("localhost", "root", "", "crud_clase");
    $sql = "UPDATE listacompra SET nombre = '$prod', unidades = $unid WHERE id = $id";

    $mysqli->query($sql);
    $mysqli->close();
    
    // Redirecciona a otro sitio
    header("location: index.php");


?>