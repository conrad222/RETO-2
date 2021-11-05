 <?php 
     /*
        ------Roles------               |      ----Permisos-----
    1->Administrador(1,2,3,4) global    |         1:Crear
    2->Asuario(1,2,3,4)                 |         2:Editar
    3->Anonimo(4)                       |         3:Borrar                                                
                                        |         4:Visualizar
    */
class Usuario{
    
    public $userId,$nombre,$mail,$password,$rol_Id,$clase;
   

    public function __cliente($userId,$nombre, $mail,$password,$rol_Id,$clase){
        $this->$userId = $userId;
        $this->nombre = $nombre;
        $this->mail = $mail;
        $this->password = $password;
        $this->rol_Id = $rol_Id;
        $this->clase = $clase;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getClase()
    {
        return $this->clase;
    }
}
?>