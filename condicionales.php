<?php

$se_hablo_de_bruno = true;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionales con php</title>
</head>
<body>

<!-- ESTO NO SE DEBE HACER -->

<?php if($se_hablo_de_bruno) {
    echo '<p>🤐</p>';
} else {
    echo '<p>😁</p>';
} ?>

    <!-- ESTO ES ACEPTABLE -->
<?php if($se_hablo_de_bruno) { ?>
    <p>🤐</p>
<?php } else { ?>
    <p>😁</p>
<?php } ?>

<!-- ESTO SI DEBERIAS HACERLO -->

<?php if($se_hablo_de_bruno): ?>
    <p>🤐</p>
<?php else:?>
    <p>😁</p>
<?php endif;?>

<?php if(!$se_hablo_de_bruno): ?>
    <b>No se habla de bruno</b>
<?php else: ?>
    <b>Si se habla de Bruno</b>
<?php endif; ?>




    
</body>
</html>