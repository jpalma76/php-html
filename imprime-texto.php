<?php

$nombre="Mr. Michi";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<b>Hola mamá</b><br>"; ?>

    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con php</i>" ?>

    <h2>Hola, <?= $nombre ?></h2>
    
    
</body>
</html>