<?php
class DbConexion{
	private $dbcon=null;
	private $msgerror="";
	
	private $servidor="localhost";
	private $user="root";
	private $pass="Sw28Cw37";
	private $db_name="rutas";
	
	public function Conectar(){
		$servidor=$this->servidor;
		$user=$this->user;
		$pass=$this->pass;
		$db_name=$this->db_name;
		
		if(!$this->dbcon=@mysql_connect($servidor,$user,$pass))
		{
			new RunTimeException("No se pudo conectar al Servidor");
		}
		if(!mysql_select_db($db_name,$this->dbcon))
		{
			new RunTimeException("No se pudo seleccionar la base de datos $db_name");
		}
                
                $this->Ejecutar("SET CHARACTER SET 'utf8'");
	
	}
	
	public function Desconectar(){
		mysql_close($this->dbcon);
	}
	
	public function Consultar($sentencia){
		$num_registros=0;
		if(!$datos=@mysql_query($sentencia,$this->dbcon))
		{
			$this->msgerror="No se pudo ejecutar la sentencia : $sentencia";
		}
		else
		{
			$this->msgerror="Consulta no devolvio datos";
			$arreglo=array();
			while($fila=mysql_fetch_assoc($datos))
			{
				$arreglo[]=$fila;
				$num_registros++;
			}
		}
		
		return ($num_registros==0)?false:$arreglo;
	}
	
	public function Ejecutar($sentencia){
	if(!mysql_query($sentencia,$this->dbcon))
		{
			return false;
		}
		else
		{	return true;
		}
	}
	
	public function geterrors(){
		return $this->msgerror;
	}
}
?>