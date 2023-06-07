<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./server.php" method="post">
    
    <!-- input simple -->
     <!-- <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"> -->

    <!-- input tipo arreglo -->
    <!--  <br>
    <label>Nombres:</label>
    <br>
    <input type="text" name="personas[]">
    <br>
    <input type="text" name="personas[]">
    <br>
    <input type="text" name="personas[]">
    <br> -->

    <!-- Arreglos asociativos -->
   <!--  <label for="">Nombre de la Persona:</label>
    <input type="text" name="persona[nombre]">
    <br>
    <label for="">Correo de la Persona:</label>
    <input type="email" name="persona[email]">
    <br>
    <label for="">Edad de la Persona:</label>
    <input type="number" name="persona[edad]"> -->

    <!-- checkbox -->
    <!-- <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3" > -->

    <!-- input radio -->
<!--     <input type="radio" name="pais" id="mexico" value="mexico">
    <label for="mexico">México</label>
    <input type="radio" name="pais" id="colombia" value="colombia">
    <label for="colombia">Colombia</label>
    <input type="radio" name="pais" id="peru" value="peru">
    <label for="peru">Perú</label> -->

    <!-- Multiples archivos -->
    <label for="">Carga tus imagenes:</label>
    <input type="file" multiple name="galeria[]">

    <br>
    <button type="submit">Enviar</button>
    
</form>
    
</body>
</html>