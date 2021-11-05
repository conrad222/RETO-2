<?php
//obtener datos del form
require "PHPMailer.php";
require "SMTP.php";
require "Exception.php";
require "OAuth.php";
require "POP3.php";
$remitente=$_POST["email"];
$mensaje=$_POST["texto"];

//Envio de correo miclase->enviarCorreo($email,$texto);
$email= new PHPMailer\PHPMailer\PHPMailer();
$email->isSMTP();//Servidor smtp
$email->SMTPDebug=1; //Errores y mensajes 2: Solo mensajes
$email->SMTPAuth=true; 
$email->SMTPSecure='ssl';
$email->Host='smtp.gmail.com';
$email->Port='465';
$email->Username='2daw1021@gmail.com';
$email->Password='segundodaw';
$email->From='2daw1021@gmail.com';
$email->FromName='Pokemons';
$email->AddAddress('@gmail.com');
$email->AddReplyTo('2daw1021@gmail.com','Pokemons');
$email->IsHTML(true);//HTML y CSS
$email->Subject="Alguien quiere contactar contigo";
$email->Body="<h2>Pokemons</h2>
<p>$mensaje</p>";
$email->AltB2Para ="ver este mensaje debes habilitar un gestor de correo compatible con html";
if (!$email->Send()) {
    //error
    echo "Error :( :".$email->ErrorInfo;
} else {
    //enviado
    echo "Correo enviado. En breve responderemos";
}

?>