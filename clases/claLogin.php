<?php
include('../librerias/conexion.php');
class Usuario{
    private $dbcon=null;
    
    function Usuario(){
        $this->dbcon=new DbConexion();
    }
    
    public function consultarUsuario($usu,$pass)
    {
        $this->dbcon->Conectar();
        $sentencia="Select * from tblusuario where usuario='".$usu."' and clave='".$pass."'";
        
        $datos=  $this->dbcon->Consultar($sentencia);
        return (!$datos)?false:$datos;
    }

    
}
?>