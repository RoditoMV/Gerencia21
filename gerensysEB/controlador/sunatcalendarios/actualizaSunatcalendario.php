<?php
	include("../../modelo/conexion.php");

	$id=$_POST['id_sunatcalendario'];
	$ruc =$_POST['ruc'];
	$razonsocial =$_POST['razonsocial'];
	$ultimodigito =$_POST['ultimodigito'];
	$ano =$_POST['ano'];
	$ene =$_POST['ene'];
	$feb =$_POST['feb'];
	$mar =$_POST['mar'];
	$abr =$_POST['abr'];
	$may =$_POST['may'];
	$jun =$_POST['jun'];
	$jul =$_POST['jul'];
	$ago =$_POST['ago'];
	$sep =$_POST['sep'];
	$oct =$_POST['oct'];
	$nov =$_POST['nov'];
	$dic =$_POST['dic'];

	$sql = "UPDATE sunatcalendarios SET ruc = '$ruc', razonsocial = '$razonsocial', ultimodigito = '$ultimodigito', ano = '$ano', ene = '$ene', feb = '$feb', mar = '$mar', abr = '$abr', may = '$may', jun = '$jun', jul = '$jul', ago = '$ago', sep = '$sep', oct = '$oct', nov = '$nov', dic = '$dic' WHERE id_sunatcalendario = '$id'";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO MODIFICAR"; 
	}

?>