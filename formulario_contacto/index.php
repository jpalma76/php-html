<?php

require "mail.php";

function validate($name, $email, $subject, $message, $form){
    return !empty( $name && !empty($email) && !empty($subject) && !empty($message) );
}
$status = "";

if( isset($_POST["form"]) ) {

    if( validate(...$_POST)) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name, <$email> te enía el siguiente mensaje <br> <br> $message";

        // MANDAR EL CORREO
        sendMail($subject, $body, $email, $name, true);

        $status = "success";

    } else {
        $status = "danger";
    }

}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>

    <?php if($status == "danger"): ?>
        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>
    <?php endif; ?>

    <?php if($status == "success"): ?>
        <div class="alert success">
            <span>Mensaje enviado con éxito</span>
        </div>
    <?php endif; ?>
    
    <form action="./" method="post">

        <h1>Contactanos</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" class="btn btn-succes" type="submit">Enviar</button>
        </div>

        <div class="contact-info">

            <div class="info">
                <span> <i class="fa-solid fa-location-dot"></i> 13 Saw mill Circle, North Olmested</span>
            </div>

            <div class="info">
                <span><i class="fa-solid fa-phone"></i> +1 23 123456789</span>
            </div>

        </div>

    </form>
    
    <script src="https://kit.fontawesome.com/8fa5622c5b.js" crossorigin="anonymous"></script>
</body>
</html>