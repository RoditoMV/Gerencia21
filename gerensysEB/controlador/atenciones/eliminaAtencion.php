<?php
	include("../../modelo/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM atenciones WHERE id_atencion = '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/gestionatencion.php");
	}else{
		echo "NO SE PUDO ELIMINAR"; 
	}

?>