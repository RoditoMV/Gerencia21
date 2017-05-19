<?php
	include("../../modelo/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM usuarios WHERE id_usuario = '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO ELIMINAR"; 
	}

?>