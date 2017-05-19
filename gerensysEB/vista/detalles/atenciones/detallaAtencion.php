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
	$sql = "SELECT * FROM atenciones WHERE id_atencion = '$id'";
	$respuesta = $conexion->query($sql);
	$atencion = $respuesta->fetch_assoc();
?>
<div class="container vistaDetalle">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-condensed table-hover tablaDetalle" style="width:100%;">
				<thead>
					<tr class="encabezado">
						<td colspan="4">
							<a  href="" >
								<span class="glyphicon glyphicon-print"></span>
							</a> 
							<a href="">
								<span class="glyphicon glyphicon-save-file"></span>
							</a>
							<a href="../../formularios/atenciones/modificaAtencion.php?id=<?php  echo $atencion['id_atencion'];?>">
								<span class="glyphicon glyphicon-edit"></span>
							</a>
						</td>
					</tr>
					<tr class="active">
						<td colspan="4"><h4>DETALLE DE INFORMACIÓN REGISTRADA - Atenciones</h4></td>
					</tr>
					<tr>
						<td colspan="4"><h2><?php echo $atencion['razonsocial'];?></h2></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="etiqueta">ESTADO</td>
						<td class="active"><strong><?php echo $atencion['estado'];?></strong></td>
						<td class="etiqueta">EXPEDIENTE</td>
						<td class="active"><strong><?php echo $atencion['expediente'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">FECHA DE ATENCIÓN</td>
						<td class="active"><strong><?php echo $atencion['fechaatencion'];?></strong></td>
						<td class="etiqueta">FECHA DE RESULTADO</td>
						<td class="active"><strong><?php echo $atencion['fecharesultado'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">CONSULTANTE</td>
						<td class="active"><strong><?php echo $atencion['consultante'];?></strong></td>
						<td class="etiqueta">ASISTENTE</td>
						<td class="active"><strong><?php echo $atencion['asistente'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">ASUNTO</td>
						<td colspan="3" class="active"><strong><?php echo $atencion['asunto'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">OBSERVACIÓN</td>
						<td colspan="3" class="active"><strong><?php echo $atencion['observacion'];?></strong></td>
					</tr>
					
					
				</tbody>
			</table>
			 <a href="../../gestionatencion.php">
			 	<button class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-arrow-left"></span> REGRESAR</button>
			 </a>
		</div>
	</div>
</div>
<script type="text/javascript" charset="utf8" src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>