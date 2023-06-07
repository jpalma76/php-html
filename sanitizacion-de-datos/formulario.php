<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitizando datos</title>
    <style>
        label {
            display: inline-flex;
            width: 80px;
        }
    </style>
</head>
<body>
    
    <form action="server.php" method="post">
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>

        <label for="email">Correo:</label>
        <input type="text" name="email" id="email">
        <br>

        <label for="age">Edad:</label>
        <input type="text" name="age" id="age">
        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>

</body>
</html>