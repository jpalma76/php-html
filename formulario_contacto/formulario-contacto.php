<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php if ($status == "danger"): ?>
        <div class="alert danger">
            <span>Surgió un problema!</span>
        </div>
    <?php endif; ?>

    <?php if ($status == "success"): ?>
        <div class="alert success">
            <span>Mensaje enviado con éxito</span>
        </div>
    <?php endif; ?>

    
    <form action="./server.php" method="post">

        <h1>¡Contactanos!</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subjet">Asunto:</label>
            <input type="text" name="subjet" id="subjet">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textArea name="message" id="message"></textArea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> 13 Saumil Circle, North Olmested</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> + 1 23 456789456</span>
            </div>
        </div>

    </form>

    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>

</body>
</html>