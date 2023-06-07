<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por POST</title>
</head>
<body>
    <h1>Formulario por POST</h1>

    <form action="./server.php" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">

        <button type="submit">Mandar Formulario</button>

    </form>
    
</body>
</html>