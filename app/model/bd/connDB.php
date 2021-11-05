<?php 


    class AccesoBD{

            const server = 'localhost:3306';
            const username='root';
            const password='';
            const database='reto1';

        /*function __construct(){
            $this->dbConn();
        }*/

        function dbConn(){

             $conexion = mysqli_connect(self::server,self::username,self::password,self::database);

            if (!$conexion) {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }else{
                echo "Éxito: Se realizó una conexión apropiada a MySQL " . PHP_EOL;
                echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

                mysqli_close($conexion);
            }
        
        }

        /* 
            ejecuta sentencias preparadas 
            i	la variable correspondiente es de tipo entero
            d	la variable correspondiente es de tipo double
            s	la variable correspondiente es de tipo string
            b	la variable correspondiente es un blob y se envía en paquetes
        */
        function addUser($usuario,$email,$password,$token,$clase){
             

            $sqli= mysqli_connect(self::server,self::username,self::password,self::database);
            $stmt = mysqli_prepare($sqli, "INSERT INTO usuario (nombre,email,password,rol_Id,token,clase) VALUES (?, ?, ?, ?,?,?)");
            mysqli_stmt_bind_param($stmt, 'sssiss', $usuario, $email, $password,'1',$token,$clase);
            
            // ejecuta sentencias preparadas 
            mysqli_stmt_execute($stmt);
            
            // cierra sentencia y conexión 
            mysqli_stmt_close($stmt);

            return "ok";
        }

        function getUser($mail,$password){
            $sqli= mysqli_connect(self::server,self::username,self::password,self::database);
           
            include_once "../model/usuario/usuario.php";
           
            // ejecuta sentencias preparadas 
           
            $stmt = $sqli->prepare("SELECT * from usuario where email=? and password=?");
            $stmt->bind_param("ss", $mail, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            if (($fila = mysqli_fetch_array($result))!=null)
            {
                //extract($fila);
                $user_Id=$fila['user_Id'];
                $nombre=$fila['nombre'];
                $mail=$fila['email'];
                $password=$fila['password'];
                $rol_Id=$fila['rol_Id'];
                $valid=$fila['validate'];
                $token=$fila['token'];
                $clase=$fila['clase'];
                
                $usuario=new Usuario( $user_Id,$nombre,$mail,$password,$rol_Id,$clase);
               
            }else{
                //Usuario o contraseña incorrectos
                $usuario=null;
            }
            mysqli_free_result($result);
        
            
            /* cierra sentencia y conexión */
            mysqli_stmt_close($stmt);
            return $usuario;

        }

        function deleteUser($email){
            $sqli= mysqli_connect(self::server,self::username,self::password,self::database);
            $stmt = mysqli_prepare($sqli, "DELETE usuario where email=?");
            mysqli_stmt_bind_param($stmt, 's', $email);
            
            mysqli_stmt_execute($stmt);
            
            /* cierra sentencia y conexión */
            mysqli_stmt_close($stmt);
        }

        public function enviarMensajes($usuario,$textoMensaje){
            include_once "../app/model/message/message.php";
            $usuario=$usuario->userId;     
            $date=date("y-m/d h:i:s");    
            $sqli= mysqli_connect(self::server,self::username,self::password,self::database);
            $stmt = mysqli_prepare($sqli, "INSERT INTO mensaje (user_Id,textoMensaje,fechaCreacion) VALUES (?,?,?)");
            mysqli_stmt_bind_param($stmt, 'iss', $usuario, $textoMensaje, $date);
            
            // ejecuta sentencias preparadas 
            mysqli_stmt_execute($stmt);
            
            // cierra sentencia y conexión 
            mysqli_stmt_close($stmt);
        
        }
        public function obtenerMensajes(){
            include_once "../app/model/message/message.php";
            //Bucle para coger 5 mensajes aleatorios
            $sqli= mysqli_connect(self::server,self::username,self::password,self::database);
            $sql ="SELECT * FROM mensaje ORDER BY RAND() LIMIT 5";
            $result =mysqli_query($sqli,$sql);
            $mensajes=array();

                WHILE (($fila=mysqli_fetch_array($result))!=null) {
                       extract($fila);
                       $mensaje=new mensaje($Mensaje_id,$user_id,$textoMensaje,$fechaCreacion,$validado); 
                       $mensajes[]= $mensaje;
                }$this->Mensaje_id=$Mensaje_id;
                $this->user_id=$user_id;
                $this->textoMensaje=$textoMensaje;
                $this->fechaCreacion=$fechaCreacion;
                $this->validado=$validado;
                return $mensajes;
            }

        function getUserSesion($Usuario){
            $_SESSION['user'] = $Usuario;
        }

        function setUserSesion($Usuario){
           return $_SESSION['user'] ;
        }







    }  
?>