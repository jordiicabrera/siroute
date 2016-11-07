<?php
include("../clases/claLogin.php");
switch ($_POST["opcion"]) {
	case 'login':
		$usuario=$_POST["txtUsuario"];
		$clave=$_POST["txtClave"];

		$usuario = new Usuario();

		if(!$usu=$usuario->consultarUsuario($usuario,$clave))
		{
			echo "Datos de usuario incorrectos";
		}
		else
		{
			session_start();
			$_SESSION["usuario"]=$usuario;
			$_SESSION["clave"]=$clave;
			$_SESSION["nombreUsuario"]=$nombreUsuario;
			$_SESSION["logueado"]="SI";

			echo "ok";
		}

		break;
	
	default:
		# code...
		break;
}
?>