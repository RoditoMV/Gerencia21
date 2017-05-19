<?php
	include("../../modelo/conexion.php");


	$ruc =$_POST['ruc'];
	$razonsocial =$_POST['razonsocial'];
	$telefonofijo =$_POST['telefonofijo'];
	$celulara =$_POST['celulara'];
	$contactoa =$_POST['contactoa'];
	$celularb =$_POST['celularb'];
	$contactob =$_POST['contactob'];
	$emaila =$_POST['emaila'];
	$emailb =$_POST['emailb'];

	$sql = "INSERT INTO agendas(ruc, razonsocial, telefonofijo, celulara, contactoa, celularb, contactob, emaila, emailb) VALUES ('$ruc', '$razonsocial', '$telefonofijo', '$celulara', '$contactoa', '$celularb', '$contactob','$emaila','$emailb')";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO REALIZAR EL REGISTRO"; 
	}

?>