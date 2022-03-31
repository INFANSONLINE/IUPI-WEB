<?php
$destinatario='info@infansonline.com';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = "Solicito nueva entrevista";
$contenido = "name:" . $name . "\nemail:" . $email . "\nphone:" . $phone . "\nmessage:" . $mensaje;
mail($destinatario, $asunto, $contenido, $header);

echo "<script>alert('correo enviado con exito')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>