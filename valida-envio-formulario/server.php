<?php

// isset = verifica si la variable está seteada o existe
// empty = verifica si la variable está vacía

//var_dump(empty($_POST["nombre"]));
 
if ( isset($_POST["nombre"]) && (!empty($_POST["nombre"])) ) {
    echo "Hola {$_POST["nombre"]}! ";
} else {
    echo "No mandaste nada 😾";
}

