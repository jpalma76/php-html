<?php

/* echo "<pre>";

var_dump($_POST);

echo "</pre>"; */

$name = $_POST['nombre'];
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];

$htmlentities = htmlentities($name);
$addslashes  = addslashes($username);

$onlywords = preg_replace("/\d/","", $username);
$onlynumbers = preg_replace("/\D/","", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>Nombre : <?= $htmlentities ?></p>
    <p>Username : <?= $addslashes ?></p>
    <p>Username : <?= $onlywords ?></p>
    <p>Username : <?= $onlynumbers ?></p>
    <p>email : <?= $email ?></p>
    <p>Edad : <?= $sanitize_int ?></p>
    
</body>
</html>