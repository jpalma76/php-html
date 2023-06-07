<?php

function validate($name, $email, $subjet, $message, $form ) {
    return !empty($name) && !empty($email) && !empty($subjet) && !empty($message);
}

$status = "";

if( isset($_POST["form"]) ) {
    // funcion arrayUnpacking
    if ( validate(...$_POST) ) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subjet = $_POST["subjet"];
        $message = $_POST["message"];

        //Mandar el correo

        $status = "succes";
    } else {
        $status = "danger";
    }

}

?>