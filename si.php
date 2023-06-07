<?php

$numero = 9;
$tabla_de_multiplicar = [];
/* Con el ciclo for se rellena el array $tabla_del_9 con los resultados
   de la tabla del 9 */
for ($i=1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    $texto = "$numero x $i = $resultado";
    array_push($tabla_de_multiplicar,$texto);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejecucion correcta de ciclos en php y html</title>
</head>
<body>
    
    <h1>tabla del <?= $numero ?></h1>

    <ul>
        <?php foreach($tabla_de_multiplicar as $valor): ?>
            <li><?= $valor ?></li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>