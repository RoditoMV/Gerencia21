<?php
	include("../../modelo/conexion.php");


	$nombres =$_POST['nombres'];
	$email =$_POST['email'];
	$telefono =$_POST['telefono'];
	$usuario =$_POST['usuario'];
	$tipo =$_POST['tipo'];

	$sql = "INSERT INTO usuarios(nombres, email, telefono, usuario, tipo) VALUES ('$nombres', '$email', '$telefono', '$usuario', '$tipo')";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO REALIZAR EL REGISTRO"; 
	}

?>