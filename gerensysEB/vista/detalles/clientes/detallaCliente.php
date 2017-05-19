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
	$sql = "SELECT * FROM clientes WHERE id_cliente = '$id'";
	$respuesta = $conexion->query($sql);
	$cliente = $respuesta->fetch_assoc();
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
							<a href="../../formularios/clientes/modificaCliente.php?id=<?php  echo $cliente['id_cliente'];?>">
								<span class="glyphicon glyphicon-edit"></span>
							</a>
						</td>
					</tr>
					<tr class="active">
						<td colspan="4"><h4>DETALLE DE INFORMACIÓN REGISTRADA - Información General del Cliente</h4></td>
					</tr>
					<tr>
						<td colspan="4"><h2><?php echo $cliente['razonsocial'];?></h2></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="etiqueta">RUC</td>
						<td class="active"><strong><?php echo $cliente['ruc'];?></strong></td>
						<td class="etiqueta">USUARIO SOL</td>
						<td class="active"><strong><?php echo $cliente['usuariosol'];?></strong></td>
						
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">CLAVE SOL</td>
						<td class="active"><strong><?php echo $cliente['clavesol'];?></strong></td>
						<td class="etiqueta">CLAVE RNP</td>
						<td class="active"><strong><?php echo $cliente['clavernp'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">USUARIO AFP</td>
						<td class="active"><strong><?php echo $cliente['usuarioafp'];?></strong></td>
						<td class="etiqueta">CLAVE AFP</td>
						<td class="active"><strong><?php echo $cliente['claveafp'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">REP. LEGAL</td>
						<td class="active"><strong><?php echo $cliente['representante'];?></strong></td>
						<td class="etiqueta">DNI REP.</td>
						<td class="active"><strong><?php echo $cliente['dnirepresentante'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">RÉGIMEN TRIBUTARIO</td>
						<td class="active"><strong><?php echo $cliente['regimen'];?></strong></td>
						<td class="etiqueta">ESTADO</td>
						<td class="active"><strong><?php echo $cliente['estado'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">PARTIDA REGISTRAL</td>
						<td class="active"><strong><?php echo $cliente['partidaregistral'];?></strong></td>
						<td class="etiqueta">CTA. DETRACCIONES</td>
						<td class="active"><strong><?php echo $cliente['cuentadetracciones'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">CTA. CTE</td>
						<td class="active"><strong><?php echo $cliente['cuentacorriente'];?></strong></td>
						<td class="etiqueta">CTA. AHORROS</td>
						<td class="active"><strong><?php echo $cliente['cuentaahorros'];?></strong></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td class="etiqueta">RESPONSABLE</td>
						<td class="active"><strong><?php echo $cliente['responsable'];?></strong></td>
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