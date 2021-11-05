<?php
    
  session_start();

  if(isset($usuario)){
    $usuario="usuer1";
  }else{
    $usuario="";
  }

  $_SESSION['usuario']="" ;

  include_once "../app/model/bd/connDB.php";
if ($_SESSION['usuario']!="Usuario1"){
  if($_SESSION['usuario']==""){ 
    $_SESSION['usuario']=null;
    }else{
      $_SESSION['usuario']= unserialize($_SESSION['usuario']);
    }
  }

  $views=array(
    "../app/Views/Principal.php",
    "../app/Views/Registrado.php",
  );
 
  include_once "../app/controllers/confIdm.php";
  

?>
<!DOCTYPE html>

  <head>
      <title>Index</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="icon" type="icon" href="../resources/img/escudo_sanluis_transp.png" />
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
                              
      <!-- Css -->
      <link href="../app/Views/css/registrado.css" type="text/css" rel="stylesheet">
      <?php if($_SESSION['usuario']==""){
        ?><link href="../app/Views/css/principal.css" type="text/css" rel="stylesheet"><?php
      }?>
      <!--Js -->
      <script src="../app/Views/js/funciones.js"></script>
      <!--bootsTrap 
      <link rel="stylesheet" href="../resources/lib/bootstrap-4.4.1-dist/css/boostrap.min.css">-->
      <!--jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
       <!-- jQuery Modal -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
     
  </head>

  <body>
      <?php
      if($usuario==""){
          include "$views[0]"; 
        }else{
          include "$views[1]";
        }
      ?>
  </body>

</html>