<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="./server.php" method="post" enctype="multipart/form-data">

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"  id="nombre">
        </div>
        <br>
        <div>
            <label for="image">Imagen:</label>
            <input type="file" name="image"  id="image">
        </div>
        <br>
        <div>
            <button type="submit">Validar formulario</button>
        </div>
    </form>
</body>
</html>