<?php
include('class.phpmailer.php');
include('class.smtp.php');

$mail = new PHPMailer();

$mail->IsSMTP(); //cambiar de acuerdo al tipo de server
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465; // o 587 depende la configuracion del SMTP, probar con ambas
$mail->Username = 'progra3uia@gmail.com';
$mail->Password = "deleenter$69"; 
$mail->SetFrom('progra3uia@gmail.com', 'Proyecto'); //cambiar de acuerdo al tipo de server
$mail->AddAddress($email);
$mail->addBCC('progra3uia@gmail.com');
$mail->CharSet = 'UTF-8';
$mail->Subject = "Correo desde el formulario de contacto, Los Santos Café"; // email subject
$mail->Body = "Se le confirma que hemos recibido un correo con los siguientes datos". '<br/>' . 
"Nombre: " . $nombre ." ". $apellidos .'<br/>' .
"Email: " . $email . '<br/>' .
"Mensaje: " . $comentario . '<br/>' . 
"Gracias por los comentarios realizados, de ser necesario lo contactaremos.". '<br/>' . "Saludos."
;
$mail->IsHTML(true);
$mail->Send();

if($mail->IsError()){
//echo "This message don't send, please report the next error: ";
$result=0;
} else {
//echo "Thanks for you message !! ";
$result=1;
}

?>