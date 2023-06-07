<?php

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */

/* guarda datos en variables */
$nombre = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

/* Sanitiza o valida los datos en el servidor */
$htmlentities = htmlentities($nombre);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server - datos sanitizados</title>
</head>
<body>
    <h2>Datos sanitizados</h2>

    <p>Nombre: <?= $htmlentities; ?></p>
    <p>Username: <?= $addslashes; ?></p>
    <p>Username solo letras: <?= $onlywords; ?></p>
    <p>Username solo números: <?= $onlynumbers; ?></p>
    <p>Email: <?= $email; ?></p>
    <p>Edad: <?= $sanitize_int; ?></p>
    
</body>
</html>
