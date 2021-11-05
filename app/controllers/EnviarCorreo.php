<?php

require "../model/mail/Exception.php";
require "../model/mail/OAuth.php";
require "../model/mail/PHPMailer.php";
require "../model/mail/POP3.php";
require "../model/mail/SMTP.php";

$creador = $_POST["correo"];
$mensaje = $_POST["mensaje"];

$email = new PHPMailer\PHPMailer\PHPMailer();
$email->isSMTP(); //servidor smtp
$email->SMTPDebug = 1; //Errores y mensaje
$email->SMTPAuth = true;
$email->SMTPSecure = 'ssl';
$email->Host = 'smtp.gmail.com';
$email->Port = '465';
$email->Username = 'pruebassanluis.ch@gmail.com';
$email->Password = '699291300';
$email->From = 'pruebassanluis.ch@gmail.com';
$email->FromName = 'Kalpataru';
$email->AddAddress('pruebassanluis.ch@gmail.com');
$email->AddReplyTo('kris14.ch@gmail.com','Reto_Igualdad');
$email->IsHTML(true); 
$email->Subject = "Correo de prueba";

$email->Body= "Prueba Exitosa";
$email->AltBody =":)";

if ($email->Send()){
    echo "El correo ha sido enviado";
}else{

    echo $email->ErrorInfo;
}



?>