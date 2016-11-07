<?php
include('../librerias/conexion.php');

class Mensajeria(){
	private $dbcon = null;

	function Mensajeria() {
	    $this->dbcon = new DbConexion();
	}

	function insertarRuta($codigo,$empresa,$perimetro,$razonSocial,$fecha,$direccion,$detalle,$contacto,$telefono,$email){
		$this->dbcon->Conectar();
		
		$sentencia="insert into rutas(cod,oficina,empresa,perimetro,direccion,detalle,contato,telefono,email)"
		$sentencia.=" values(".$codigo.",'".$oficina."','".$empresa."','".$perimetro."','".$direccion."','".$detalle."','".$contacto."','".$telefono."','".$email."')";

		return $sentencia;
	}

}

?>