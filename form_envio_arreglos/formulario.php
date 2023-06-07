<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de envio de arreglos</title>
</head>
<body>
    
    <form action="./server.php" method="post" enctype="multipart/form-data">

       <!--  <label for="">Nombre:</label><br>
        <br>
        <input type="nombre" name="personas[]">
        <br>
        <input type="nombre" name="personas[]">
        <br>
        <input type="nombre" name="personas[]"> -->


        <label for="">Nombre:</label><br>
        <input type="nombre" name="persona[]">
        <br>

        <label for="">Correo:</label><br>
        <input type="email" name="persona[]">
        <br>

        <label for="">Edad:</label><br>
        <input type="number" name="persona[]">
        <br><br>

        <button>Enviar</button>

    </form>

</body>
</html>