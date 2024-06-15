<?php

// Vinculo cada nombre con el formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tlf = $_POST['tlf'];
$motivo = $_POST[''];
$textarea = $_POST['textarea'];

// Mostramos un texto plano
$header .= "Content-Type: text/plain";

// Constitución del cuerpo del mail.
$mensaje = "El mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje = "Con la siguiente dirección de correo: " . $correo . ",\r\n";
$mensaje = "Teléfono: " . $tlf . ",\r\n";
$mensaje = "Motivo: " . $motivo . ",\r\n";
$mensaje = "Mensaje: " . $motivo . ",\r\n";

$destinatario = "almendrocastillo@gmail.com";
$asunto = "Mensaje de mi Portfolio Web";

mail($destinatario,$asunto, utf8_decode($mensaje),$header);

header('Location:exito.html');

?>
