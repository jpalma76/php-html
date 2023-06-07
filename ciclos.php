<?php

$usuarios = ["Mr. Michi", "RataxMaster", "Juan Damian"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en php</title>
    
</head>
<body>
    
    <ul>
        <h3>Lista de un array</h3>
        <?php foreach ($usuarios as $usuario):?>
            <li><?= $usuario ?></li>
        <?php endforeach; ?>

        <h3>Lista de numeros desde un for</h3>
        <?php for($x=0; $x <= 10; $x++): ?> 
            <li><?= $x ?></li>
        <?php endfor; ?>

        <?php while($usuarios): ?>
            <?php for($i = 0; $i < 10; $i++) { ?>
                <li><?= $usuario[$i] ?></li>
            <?php } ?>
        <?php endwhile; ?>
    </ul>

</body>
</html>