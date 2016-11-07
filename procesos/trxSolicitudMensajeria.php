<?php

include("../clases/claSolicitudMensajeria.php");
$mensajeria = new Mensajeria();

switch ($_REQUEST['opcion']) {
	case "insertar":
		$opcion = $_POST["opcion"];
		$empresa = $_POST["cmbEmpresa"];
		$perimetro = $_POST["cmbPerimetro"];
		$fecha = $_POST["dtpFecha"];


		echo $mensajeria->insertarRuta()
	}
?>