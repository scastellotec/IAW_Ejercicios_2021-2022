<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_REQUEST["id"];
        $p = $_REQUEST["id"];
        session_start();

        $_SESSION[$p] = $p;

        echo $_SESSION[$p];
    ?>
</body>
</html>