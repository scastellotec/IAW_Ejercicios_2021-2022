<?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "crud_clase");
    $sql = "SELECT id, nombre, unidades FROM listacompra";
    $result = $mysqli->query($sql);

    echo "<table class='table table-hover'>";
    echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Unidades</th>";
        echo "<th></th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        if (isset($_REQUEST["id"]) and $_REQUEST["id"] == $row['id']){
            // si me envias un parametro id y coincide con el de la linea pones esto
            echo "<tr>";
            echo "<form method='get' action='update.php'>";
            echo "<td><input type='text' id='producto' name='producto' value='".$row["nombre"]."'></td>";
            echo "<td><input type='text' id='unidades' name='unidades' value='".$row["unidades"]."'></td>";
            echo "<input type='hidden'name='id' value='".$row["id"]."'>";
            echo "<td><input type='submit' value='Guardar'></td>";
            echo "</form>";
            echo "</tr>";
        } else {
            // si todo es normal se ejecute este trozo
            echo "<tr>";
            echo "<td>".$row["nombre"]."</td>";
            echo "<td>".$row["unidades"]."</td>";
            echo "<td><a href='delete.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Borrar</button></a>";
            echo " <a href='index.php?id=".$row['id']."'><button type='button' class='btn btn-warning'>Modificar</button></a></td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    $mysqli->close();
?>