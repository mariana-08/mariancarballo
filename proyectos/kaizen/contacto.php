<?php
require_once("conexion.php");
//insertar registro en la base

if (!isset($_POST["nombre"]) || !isset($_POST["telefono"]) || !isset($_POST["email"]) || !isset($_POST["mensaje"])) {
    die ("Complete los campos por favor.");
}


$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

//INSERT QUERY
 mysqli_query($con, "INSERT INTO contacto (nombre, telefono, email, mensaje) VALUES ('$nombre','$telefono','$email','$mensaje')");


//guardo esto por las dudas de no perderlo
//CHECKING SUBMIT BUTTON
//     if(isset($_POST["submit"]) && $_POST["submit"]!=""){ 
//         $nombre = $_POST["nombre"];
// 		$telefono = $_POST["telefono"];
// 		$email = $_POST["email"];
// 		$mensaje = $_POST["mensaje"];
// //INSERT QUERY
//  mysqli_query($con, "INSERT INTO contacto (nombre, telefono, email, mensaje) VALUES (0, '$nombre','$telefono','$email','$mensaje')");
// }
// mysqli_close($con);

include("phpmail/class.phpmailer.php");
include("phpmail/class.smtp.php");


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1651449.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "contacto@anagiorgi.com.ar";  // Mi cuenta de correo
$smtpClave = "Agiorgi2020";


// Email donde se enviaran los datos cargados en el formulario de contacto info@kaizenconsultores.com.ar
$emailDestino = "marianacarballofarias@gmail.com"; /// para probar con el mio .

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";



// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
$mail->Subject = "Mensaje enviado desde el Sitio Web"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "{$mensajeHtml} <br>
<table width='100%' border='0' cellpadding='12' cellspacing='0' style='font-family:Poppins, Helvetica; border: 1px #555 solid; border-radius: 15px;'>
<tr><td style='color: #042791;border-radius: 15px 15px 0 0;background:#eee;'>
<img src='https://gin.iosfa.gob.ar/img/isologo_90.png' style='float:left;max-height:60px;'>
<p style='color:#042791 !important;text-decoration:none;font-size:25px; line-height:10px;float:right;'>Contacto Web</p>;
</td></tr>
<tr><td style='font-size:13px;color:#042791'>
<strong><p>Enviaron un mensaje desde la web:</strong><br> <hr><br>;
De: $nombre<br>;
Teléfono: $telefono <br>;
Email: $email <br>;
Mensaje: $mensaje <br>;
<br><br><br><hr><br>
 <br></td></tr></table> ";// Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n Formulario de sitio web"; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

//FIN PHPMAILER
// if($enviado==true) {
// 		$_POST["submit"]="Enviar";
// 		echo "Su mensaje ha sido enviado correctamente.";
//     } else {
// 		echo "No se ha podido completar el proceso. Disculpe las molestias ocasionadas. Por favor, int&eacute;nefonoo nuevamente m&aacute;s tarde.";
// 	}
			
//liberar los resultados del recordset
// mysqli_free_result($rsContacto);


$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}



?>

