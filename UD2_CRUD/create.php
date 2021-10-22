<?php
    // recojo los valores que el usuario me envia
    $prod = $_REQUEST["producto"];
    $unid = $_REQUEST["unidades"];

    /*
        1. Conectarme a la base de datos
        2. Construir un INSERT INTO.....
        3. Ejecutar la consulta
        4. Cerrar conexión
    */
    $mysqli = new mysqli("localhost", "root", "", "crud_clase");
    $sql = "insert into listacompra (nombre, unidades) values ('$prod', '$unid')";
    $mysqli->query($sql);
    $mysqli->close();
    
    // Redirecciona a otro sitio
    header("location: index.php");

?>