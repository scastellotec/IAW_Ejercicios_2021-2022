<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Si es dato binario necesito usar POST y  enctype="multipart/form-data" -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        id: <input type="text" name="id">
        titulo: <input type="text" name="titulo">
        <label for="fileToUpload">Select image to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>