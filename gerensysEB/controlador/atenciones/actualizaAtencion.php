<?php
	include("../../modelo/conexion.php");

	$id=$_POST['id_atencion'];
	$razonsocial =$_POST['razonsocial'];
	$fechaatencion =$_POST['fechaatencion'];
	$expediente =$_POST['expediente'];
	$consultante =$_POST['consultante'];
	$asunto =$_POST['asunto'];
	$asistente =$_POST['asistente'];
	$fecharesultado =$_POST['fecharesultado'];
	$observacion =$_POST['observacion'];
	$estado =$_POST['estado'];
	

	$sql = "UPDATE atenciones SET razonsocial = '$razonsocial', fechaatencion = '$fechaatencion', consultante = '$consultante', asunto = '$asunto', asistente = '$asistente', fecharesultado = '$fecharesultado', observacion = '$observacion', estado = '$estado', expediente = '$expediente' WHERE id_atencion = '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/gestionatencion.php");
	}else{
		echo "NO SE PUDO MODIFICAR"; 
	}

?>