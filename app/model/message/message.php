<?php

class mensaje{

    public $Mensaje_id,$user_id,$textoMensaje,$fechaCreacion,$validado;

    function __mensaje($Mensaje_id,$user_id,$textoMensaje,$fechaCreacion,$validado)
    {
        $this->Mensaje_id=$Mensaje_id;
        $this->user_id=$user_id;
        $this->textoMensaje=$textoMensaje;
        $this->fechaCreacion=$fechaCreacion;
        $this->validado=$validado;

    }

    public function getId()
    {
        return $this->Mensaje_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function gettextoMensaje()
    {
        return $this->textoMensaje;
    }

    public function getFecha()
    {
        return $this->fechaCreacion;
    }

    public function getValidado()
    {
        return $this->validado;
    }

}
?>