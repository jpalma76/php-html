<?php

// Load composer's autoloader
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $email, $name, $html = false )  {

    // Configuración inicial de nuestro servidor
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'c4c04adb3dd258';
    $phpmailer->Password = '********5726';

    // Añadiendo destinatarios
    $phpmailer->setFrom('marck@facebook.com', 'Mark Zuckerberg');
    $phpmailer->addAddress($email, $name);

    // Definiendo el contenido de mi email
    $phpmailer->isHTML($html);  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    $phpmailer->send();

}

?>