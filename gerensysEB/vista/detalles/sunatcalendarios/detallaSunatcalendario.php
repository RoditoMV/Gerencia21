<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>gerensys</title>
  <link rel="stylesheet" href="../../../css/estilos.css">
  <link rel="stylesheet" href="../../../css/normalize.css"> 
  <link rel="stylesheet" type="text/css" href="../../../bootstrap/css/bootstrap.min.css">
  <script src="../../js/jquery-1.12.4.min.js"></script>
  <script src="../../js/interacciones.js"></script>
</head>
<body style="background: #595959;">
<?php
	include("../../../modelo/conexion.php");
	$id = $_REQUEST['id'];
	$sql = "SELECT * FROM sunatcalendarios WHERE id_sunatcalendario = '$id'";
	$respuesta = $conexion->query($sql);
	$sunatcalendario = $respuesta->fetch_assoc();
?>
<div class="container vistaDetalle">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-condensed table-hover tablaDetalle" style="width:100%;">
				<thead>
					<tr class="encabezado">
						<td colspan="6">
							<a  href="" >
								<span class="glyphicon glyphicon-print"></span>
							</a> 
							<a href="">
								<span class="glyphicon glyphicon-save-file"></span>
							</a>
							<a href="../../formularios/sunatcalendarios/modificaSunatcalendario.php?id=<?php  echo $sunatcalendario['id_sunatcalendario'];?>">
								<span class="glyphicon glyphicon-edit"></span>
							</a>
						</td>
					</tr>
					<tr class="active">
						<td colspan="6"><h4>DETALLE DE INFORMACIÓN REGISTRADA - Calendario de Obligaciones Mensuales</h4></td>
					</tr>
					<tr>
						<td colspan="6"><h2><?php echo $sunatcalendario['razonsocial'];?></h2></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="etiqueta">RUC</td>
						<td class="active"><strong><?php echo $sunatcalendario['ruc'];?></strong></td>
						<td class="etiqueta">ÚLTIMO DÍGITO</td>
						<td class="active"><strong><?php echo $sunatcalendario['ultimodigito'];?></strong></td>
						<td class="etiqueta">AÑO</td>
						<td class="active"><strong><?php echo $sunatcalendario['ano'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">ENERO</td>
						<td class="active"><strong><?php echo $sunatcalendario['ene'];?></strong></td>
						<td class="etiqueta">FEBRERO</td>
						<td class="active"><strong><?php echo $sunatcalendario['feb'];?></strong></td>
						<td class="etiqueta">MARZO</td>
						<td class="active"><strong><?php echo $sunatcalendario['mar'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">ABRIL</td>
						<td class="active"><strong><?php echo $sunatcalendario['abr'];?></strong></td>
						<td class="etiqueta">MAYO</td>
						<td class="active"><strong><?php echo $sunatcalendario['may'];?></strong></td>
						<td class="etiqueta">JUNIO</td>
						<td class="active"><strong><?php echo $sunatcalendario['jun'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">JULIO</td>
						<td class="active"><strong><?php echo $sunatcalendario['jul'];?></strong></td>
						<td class="etiqueta">AGOSTO</td>
						<td class="active"><strong><?php echo $sunatcalendario['ago'];?></strong></td>
						<td class="etiqueta">SETIEMBRE</td>
						<td class="active"><strong><?php echo $sunatcalendario['sep'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">OCTUBRE</td>
						<td class="active"><strong><?php echo $sunatcalendario['oct'];?></strong></td>
						<td class="etiqueta">NOVIEMBRE</td>
						<td class="active"><strong><?php echo $sunatcalendario['nov'];?></strong></td>
						<td class="etiqueta">DICIEMBRE</td>
						<td class="active"><strong><?php echo $sunatcalendario['dic'];?></strong></td>
					</tr>
				</tbody>
			</table>
			 <a href="../../iniciogeneral.php">
			 	<button class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-arrow-left"></span> REGRESAR</button>
			 </a>
		</div>
	</div>
</div>
<script type="text/javascript" charset="utf8" src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>