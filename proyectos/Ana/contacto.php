<?php

require("contact-form/class.phpmailer.php");
require("contact-form/class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["telefono"]) || !isset($_POST["email"]) || !isset($_POST["mensaje"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1651449.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "contacto@anagiorgi.com.ar";  // Mi cuenta de correo
$smtpClave = "Agiorgi2020";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "contacto@anagiorgi.com.ar";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
$mail->Subject = "Mensaje o consulta desde Ana Giorgi "; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "<table width='100%' border='0' cellpadding='12' cellspacing='0' style='font-family:Poppins, Helvetica; border: 2px #555 solid; border-radius: 15px;'>
<tr><td style='border-radius: 15px 15px 0 0; background:#fff;'>
<img src='https://anagiorgi.com.ar/img/logo-mail.png' style='float:left; max-height:60px;'>
<p style='color:#333333!important; font-family:Poppins-Bold !important; text-decoration:none;font-size:26px; line-height:10px;float:right;'>Contacto Web</p></td></tr><tr><td style='font-size:15px;color:#333333'><strong><p style='font-size:20px;'>Enviaron un mensaje desde la web:</strong> <hr><br>
 Estos son los datos que dejaron: <br><br>
 De: $nombre<br>  
Teléfono: $telefono <br>
Email: $email <br>
Mensaje: $mensaje <br><br><hr>
<br><img src='https://anagiorgi.com.ar/img/logo-.jpg' style='float:right; max-height:60px;'><br></td></tr></table>"; // Texto del email en formato HTML

$mail->AltBody = "{$telefono}\n\n{$mensaje} \n\n Correo recibido desde la Web- Ana Giorgi."; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}
