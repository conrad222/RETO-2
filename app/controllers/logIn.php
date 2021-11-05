<?php
 $usuario="Usuario1";
 
  header("location: ../../public/index.php?usuario='User1'");
 
/*
//Recibe user y pass e inicia una sesión
include_once "../model/usuario/usuario.php";
include_once "../model/bd/connDB.php";
$mail=$_POST['email'];
$pass=$_POST['password'];

$bd=new AccesoBD();
//Usuario con esta pass y activado
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

$usuario=$bd->getUser($mail,$pass);

if ($usuario!=null){
  echo "Usuario válidos.";

  session_start();
  //Añadir un nuevo objeto a la sesión
  $_SESSION['usuario']=serialize($usuario);

  header("Location: ../../public/index.php");
}else{
  //Volver al login (datos incorrectos)
  $_SESSION['usuario']="";

}
echo $usuario*/
?>