<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Otro</h1>
    <?php
        session_start();
        echo "<p>".$_SESSION['p2']["producto"]."</p>";
        echo "<p>".$_SESSION['p2']["precio"]."</p>";
    ?>
</body>
</html>