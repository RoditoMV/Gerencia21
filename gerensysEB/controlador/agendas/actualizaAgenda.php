<?php
	include("../../modelo/conexion.php");

	$id=$_POST['id_agenda'];
	$ruc =$_POST['ruc'];
	$razonsocial =$_POST['razonsocial'];
	$telefonofijo =$_POST['telefonofijo'];
	$celulara =$_POST['celulara'];
	$contactoa =$_POST['contactoa'];
	$celularb =$_POST['celularb'];
	$contactob =$_POST['contactob'];
	$emaila =$_POST['emaila'];
	$emailb =$_POST['emailb'];

	$sql = "UPDATE agendas SET ruc = '$ruc', razonsocial = '$razonsocial', telefonofijo = '$telefonofijo', celulara = '$celulara', contactoa = '$contactoa', celularb = '$celularb', contactob = '$contactob', emaila = '$emaila', emailb = '$emailb' WHERE id_agenda= '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO MODIFICAR"; 
	}

?>