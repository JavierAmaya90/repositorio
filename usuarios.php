<?php
class Usuarios{
    //campos de la clase
    private $usuarioid;
    private $nombreuser;
    private $pass;
    private $nivel;

    //definir el constructor
    function Usuarios(){
        //code
    }

    //funciones get y set
    //get
    public function getUsuarioid(){
        return $this->usuarioid;
    }
    public function getNombreuser(){
        return $this->nombreuser;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getNivel(){
        return $this->nivel;
    }
    //set
    public function setUsuarioid($user){
        $this->usuarioid=$user;
    }
    public function setNombreuser($nombre){
        $this->nombreuser=$nombre;
    }
    public function setPass($contra){
        $this->pass=$contra;
    }
    public function setNivel($nivel){
        $this->nivel = $nivel;
    }

    //acciones de Usuario
    public function validar(){
        $nivel ="";
        $con = new mysqli('localhost','root','','proyectosem6');
        $sql = "select nivel from usuarios where nombreuser='".$this->getNombreuser()."' and pass='".$this->getPass()."'";
        if($resultado = $con->query($sql)){
            $usuarios = $resultado->fetch_assoc();
            $nivel = $usuarios["nivel"];         
            return $nivel;
        }else{
            echo "No se ha podido conectar!";
            return $nivel;
            exit;
        }

    }

}
?>
