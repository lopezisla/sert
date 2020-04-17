<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
$mailusuario = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$cel = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_STRING);
$mensaje = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$vmensaje = "\nNombre: " . $nombre . " <br />";
$vmensaje .= "\nEmail: " . $mailusuario . " <br />";
$vmensaje .= "\nTeléfono: " . $cel . " <br />";
$vmensaje .= "\nComentario: " . $mensaje . " <br />";
$vmensaje .= "\nFecha y hora de envío: " . date("d/m/Y H:i:s");
$vmensaje=utf8_decode($vmensaje);
$nombre=utf8_decode($nombre);
require 'PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;
////Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "jorgelopezisla@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "alej22098";
//Set who the message is to be sent from
$mail->setFrom('solidariosenredtucuman@gmail.com', $nombre);
//Set an alternative reply-to address
//$mail->addReplyTo('jorgelopezisla@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('solidariosenredtucuman@gmail.com', 'SERT');
//Set the subject line

$mail->Subject = 'Consulta SERT - Formulario WEB - '.date("d/m/Y H:i:s");
$mail->Body = $vmensaje;
$mail->AltBody = $vmensaje;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    ?>
    <p>¡Tu mensaje se ha enviado! </p><p>Te contestaremos a la brevedad.</p>
    <?php
}
   