<?php 
$correo = $_POST['gmail'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['Mensaje'];
$asunto = $_POST['asunto'];
$destinatario = "dylankulik2006@gmail.com";
$cuerpo = '
    <html> 
        <head> 
            <title>'.$asunto.'</title> 
        </head>
        <body>
            <p> 
                Contacto:  '.$nombre. '  <br>
                Mensaje: '.$mensaje.' <br> 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 
//dirección del remitente
$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);
if (mail($destinatario,$asunto,$cuerpo,$headers)) {
    header("Location: https://dylankulik.github.io/gmail/"); // Redirección a la página principal en caso de éxito
  } else {
    // Manejo del error: mostrar mensaje de error, registrar en un log, etc.
    echo "Error al enviar el correo electrónico";
  }
?> 
