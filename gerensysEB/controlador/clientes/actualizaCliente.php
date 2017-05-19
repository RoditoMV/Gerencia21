<?php
	include("../../modelo/conexion.php");

	$id=$_POST['id_cliente'];
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

	$sql = "UPDATE clientes SET ruc = '$ruc', razonsocial = '$razonsocial', usuariosol = '$usuariosol', clavesol = '$clavesol', clavernp = '$clavernp', usuarioafp = '$usuarioafp', claveafp = '$claveafp', dnirepresentante = '$dnirepresentante', representante = '$representante', regimen = '$regimen', estado = '$estado', responsable = '$responsable', partidaregistral = '$partidaregistral', cuentadetracciones = '$cuentadetracciones', cuentacorriente = '$cuentacorriente', cuentaahorros = '$cuentaahorros' WHERE id_cliente= '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO MODIFICAR"; 
	}

?>