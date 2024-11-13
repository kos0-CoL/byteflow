



<?php
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];
  
  $asunto = "Mensaje de contacto";
  $cuerpo = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";
  
  $headers = "From: $correo\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
  
  mail("byteflow@tutamail.com", $asunto, $cuerpo, $headers);
  
  echo "Mensaje enviado correctamente";
?>

