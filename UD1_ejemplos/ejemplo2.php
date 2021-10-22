<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    Realiza una sencilla calculadora.
        Pon en una variable un número.
        Pon en otra variable un número.
        Suma y muestra el resultado.
    Pro:
        Realiza otras operaciones (Restar, dividir…).
    -->
        <?php
            $num1 = 5;
            $num2 = 7;
        ?>
    <h1>Variables</h1>
    <p>
        Primera variable = <?php echo $num1; ?><br>
        Segunda vriable = <?php echo $num2; ?>
    </p>
    <ul>
        <li>Suma: <?php echo $num1 + $num2; ?></li>
        <li>Resta: <?php echo $num1 - $num2; ?></li>
        <li>Multiplicación: <?php echo $num1 * $num2; ?></li>
        <li>División: <?php echo $num1 / $num2; ?></li>
        <li>Resto: <?php echo $num1 % $num2; ?></li>
        <li>Potencia: <?php echo $num1 ** $num2; ?></li>
    </ul>

    <hr>

    <?php
        $num1 = 5;
        $num2 = '7';

        echo "<h1>Variables</h1>";
        echo "<p>";
        echo "Primera variable = $num1 <br>";
        echo "Segunda vriable = $num2";
        echo "</p>";

        echo "<ul>";
        echo "<li>Suma $num1+$num2=".$num1+$num2."</li>";
        echo "<li>resta $num1-$num2 </li>";
        echo "<li>Multi $num1*$num2 </li>";
        echo "<li>Div $num1/$num2 </li>";
        echo "</ul>";
    ?>
</body>
</html>