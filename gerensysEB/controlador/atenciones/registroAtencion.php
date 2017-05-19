<?php
	include("../../modelo/conexion.php");

	$razonsocial =$_POST['razonsocial'];
	$fechaatencion =$_POST['fechaatencion'];
	$consultante =$_POST['consultante'];
	$asunto =$_POST['asunto'];
	$asistente =$_POST['asistente'];
	$fecharesultado =$_POST['fecharesultado'];
	$observacion =$_POST['observacion'];
	$estado =$_POST['estado'];

	$sql = "INSERT INTO atenciones(razonsocial, fechaatencion, consultante, asunto, asistente, fecharesultado, observacion, estado) VALUES ('$razonsocial', '$fechaatencion', '$consultante', '$asunto', '$asistente', '$fecharesultado', '$observacion', '$estado')";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/gestionatencion.php");
	}else{
		echo "NO SE PUDO REALIZAR EL REGISTRO"; 
	}

?>