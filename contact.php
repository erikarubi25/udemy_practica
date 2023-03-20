<?php

$para = 'erikarubi.2579@gmail.com';

$asunto = "Mensaje de prueba";
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";

$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\r\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\r\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".$_POST["message"]."\r\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar email");

header("/etc/hosts")

?>