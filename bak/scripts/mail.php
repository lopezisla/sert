
<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
//echo date("d/m/Y H:i:s e");
$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$mensaje = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    ?>
    <p>Email Incorrecto.</p>
    <?php

    exit();
} else {
    $mail_destinatario = "jorgelopezisla@gmail.com,solidariosenred.tucuman@hotmail.com";
    $headers = "From: " . $mail;
    $vmensaje = "\nNombre: " . $nombre;
    $vmensaje .= "\nEmail: " . $mail;
    $vmensaje .= "\nComentario: " . $mensaje;
    $vmensaje .= "\nFecha y hora de envío: " . date("d/m/Y H:i:s");

    if (mail($mail_destinatario, "Enviado por medio del formulario de contacto WEB", stripcslashes($vmensaje), $headers)) {
        
    } else {
        echo 'Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.';
    }
    ?>
    <p>Tu mensaje se ha enviado! </p><p>Te contestaremos a la brevedad.</p>
    <?php
}   


