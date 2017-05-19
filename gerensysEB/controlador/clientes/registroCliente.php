<?php
	include("../../modelo/conexion.php");

	$ruc =$_POST['ruc'];
	$razonsocial =$_POST['razonsocial'];
	$usuariosol =$_POST['usuariosol'];
	$clavesol =$_POST['clavesol'];
	$clavernp =$_POST['clavernp'];
	$usuarioafp =$_POST['usuarioafp'];
	$claveafp =$_POST['claveafp'];
	$dnirepresentante =$_POST['dnirepresentante'];
	$representante =$_POST['representante'];
	$regimen =$_POST['regimen'];
	$estado =$_POST['estado'];
	$responsable =$_POST['responsable'];
	$partidaregistral =$_POST['partidaregistral'];
	$cuentadetracciones =$_POST['cuentadetracciones'];
	$cuentacorriente =$_POST['cuentacorriente'];
	$cuentaahorros =$_POST['cuentaahorros'];

	$sql = "INSERT INTO clientes(ruc, razonsocial, usuariosol, clavesol, clavernp, usuarioafp, claveafp, dnirepresentante, representante, regimen, estado, responsable, partidaregistral, cuentadetracciones, cuentacorriente, cuentaahorros) VALUES ('$ruc', '$razonsocial', '$usuariosol', '$clavesol', '$clavernp', '$usuarioafp', '$claveafp', '$dnirepresentante', '$representante', '$regimen', '$estado', '$responsable', '$partidaregistral', '$cuentadetracciones', '$cuentacorriente', '$cuentaahorros')";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO REALIZAR EL REGISTRO"; 
	}

?>