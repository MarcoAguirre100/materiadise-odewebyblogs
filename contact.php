<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['mensaje'];
$para = 'drdeniscruzvega@gmail.com';
$titulo = 'INFORMACION SOBRE DR. CRUZ VEGA';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Asunto: $asunto\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, gracias por su email, el Dr. Cruz Vega se comunicará con usted');
window.location.href = 'http://www.cruz-vega.com';
</script>";
} else {
echo 'Fail, please try again';
}
}
?>