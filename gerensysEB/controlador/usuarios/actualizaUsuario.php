<?php
	include("../../modelo/conexion.php");

	$id=$_POST['id_usuario'];
	$nombres =$_POST['nombres'];
	$email =$_POST['email'];
	$telefono =$_POST['telefono'];
	$usuario =$_POST['usuario'];
	$tipo =$_POST['tipo'];

	$sql = "UPDATE usuarios SET nombres = '$nombres', email = '$email', telefono = '$telefono', usuario = '$usuario',  tipo = '$tipo' WHERE id_usuario= '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO MODIFICAR"; 
	}

?>