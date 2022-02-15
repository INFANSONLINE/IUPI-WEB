<?php
$destino="info@infansonline.com";
$nombre=$_POST["name"];
$mail=$_POST["Email"];
$telefono=$_POST["phone"];
$mensaje=$_POST["message"];
$contenido="name:" . $nombre . "\nEmail:" . $mail . "\ntelefono:" . $phone . "\nmensaje:" . $mensaje;
mail($destino,"Nueva entrevista", $contenido);
header("Location:gracias.html");

?>