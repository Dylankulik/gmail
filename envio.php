<?php
$destino = 'dylankulik97@gmial.com'
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$rta =  var_dump($nombre);
mail($destino, $asunto, $mensaje );
echo"<script> alert('correo enviado') </script>";
echo"<script> setTimeout(\"location.href='correo.html'\",1000) </script>";
?>