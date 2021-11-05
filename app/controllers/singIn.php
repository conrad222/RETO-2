<?php
  echo '<script language="javascript">';
  echo 'alert("message successfully sent")';
  echo '</script>';

  require '../../model/bd/connDB.php';

  $message = '';

  $bd=new AccesoBD();
  
  $usuario= $_POST['nombre'];
  $email= $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $token = openssl_random_pseudo_bytes(16);
    $token = bin2hex($token);
  $clase=$_POST['clase'];
  if($bd->addUser($usuario,$email,$password,$token,$clase)=="ok"){ 

    $view=1; 

  }else{
    $message = 'error al añadir usuario';
    echo $message;
  }
  echo "ok";
  
?>