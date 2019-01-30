
<?php
if (!isset($_POST['email'])) {
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>
      Nombre:
      <input name="nombre" type="text" /><br>
    </label>
    <label>
      Teléfono:
      <input name="telefono" type="text" /><br>
    </label>
    <label>
      Email:
      <input name="email" type="text" /><br>
    </label>
    <label>
      Mensaje:
      <textarea name="mensaje" rows="6" cols="50"></textarea>
    </label>
    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar" />
  </form>
<?php
}else{
  $mensaje="Mensaje del formulario de contacto de nnatali.com";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "gabitopotamadre3d@gmail.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  $cabeceras = "From: $remitente" . "\r\n" .
"Reply-To: $destino" . "\r\n" .
'X-Mailer: PHP/' . phpversion();
  mail($destino,$asunto,$mensaje,$cabeceras);
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>