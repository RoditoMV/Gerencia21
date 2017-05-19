<?php
	include("../../modelo/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM agendas WHERE id_agenda = '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO ELIMINAR"; 
	}

?>