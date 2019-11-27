<?php

$nombre = $_POST ['nombre'];
$correo = $_POST ['correo'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

$destinatario = "daniul97@gmail.com";
$asuntoweb = "Contacto desde la pagina web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje \n";

mail ($destinatario,$asunto,$carta);
header('location: otromensaje.html')
?> 
