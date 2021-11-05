<?php
  session_start();

  session_unset();

  session_destroy();

  $_SESSION['usuario']="";

  header('Location: ../../public/index.php');

?>
