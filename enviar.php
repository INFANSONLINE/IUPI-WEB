<?php
$destinatario='info@infansonline.com';
$nombre=$_POST["name"];
$mail=$_POST["email"];
$telefono=$_POST["phone"];
$mensaje=$_POST["message"];

$header="Solicito nueva entrevista";
$contenido="name:" . $nombre . "\nemail:" . $mail . "\ntelefono:" . $phone . "\nmensaje:" . $mensaje;
mail($destinatario,"Nueva entrevista", $contenido, $header);
header("<Location>gracias.html");

?>