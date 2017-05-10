<?php
  $destino= "irvin1506@hotmail.com";
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $asunto= $_post['asunto'];
  $mensaje = $_POST['mensaje'];
  $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
  mail($destino,"Mensaje de El Manu",$contenido);
  header("Location:index.html");
?>
