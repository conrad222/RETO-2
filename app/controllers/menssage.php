 <?php
    require '../model/bd/connDB.php';
  
    //Recibe user y pass e inicia una sesión
    $bd=new AccesoBD();
    //Usuario con esta pass y activado
    if ($deseo!=null){
    
        $bd->enviarMensajes($usuario,$textoMensaje);
        
        header("location: ../../index.php?view=1");
        
        
    }else if($deseo = '' && $deseo = " "){
        header("location: ../../index.php?view=1");
    }
?>
