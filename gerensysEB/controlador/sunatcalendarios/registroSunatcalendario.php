<?php
	include("../../modelo/conexion.php");

	$ruc =$_POST['ruc'];
	$ultimodigito =$_POST['ultimodigito'];
	$razonsocial =$_POST['razonsocial'];
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

	$sql = "INSERT INTO sunatcalendarios(ruc, ultimodigito, razonsocial, ene, feb, mar, abr, may, jun, jul, ago, sep, oct, nov, dic) VALUES ('$ruc', '$ultimodigito', '$razonsocial', '$ene', '$feb', '$mar', '$abr', '$may', '$jun', '$jul', '$ago', '$sep', '$oct', '$nov', '$dic')";
	$respuesta = $conexion->query($sql);

	if ($respuesta) {
		header("Location:../../vista/iniciogeneral.php");
	}else{
		echo "NO SE PUDO REALIZAR EL REGISTRO"; 
	}

?>