<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envio de imagenes</title>
</head>
<body>
    
<form action="./server.php" method="post" enctype="multipart/form-data">

    <br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="image">Imagen:</label>
    <input type="file" name="image" id="image">


    <br>
    <button type="submit">Mandar Formulario</button>

</form>
</body>
</html>