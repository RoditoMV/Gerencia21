<?php
	include("../../modelo/conexion.php");

	$id = $_REQUEST['id'];

	$sql = "DELETE FROM clientes WHERE id_cliente = '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO ELIMINAR"; 
	}

?>