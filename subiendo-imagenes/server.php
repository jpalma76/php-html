<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$basename=basename($_FILES['image']['name']);
$tmp_image=$_FILES["image"]["tmp_name"];
$path= "images/$basename";

move_uploaded_file($tmp_image, $path);

echo $path;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardando imagenes en el server</title>
</head>
<body>

<img src="<?= $path ?>" alt="<?= $basename ?>">
    
</body>
</html>