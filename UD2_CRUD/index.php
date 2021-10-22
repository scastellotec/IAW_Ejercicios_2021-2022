<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <form class="row row-cols-lg-auto g-3 align-items-center" method="post" action="create.php">
        <div class="col-12">    
            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="producto">
        </div>
        <div class="col-12"> 
            <label for="unidades">Unidades:</label>
            <input type="text" id="unidades" name="unidades">
        </div>
        <div class="col-12">    
            <button type="submit"value="Enviar" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <?php
        include("read.php");
    ?>
</body>
</html>