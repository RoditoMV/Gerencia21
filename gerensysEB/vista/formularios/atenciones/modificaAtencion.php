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
<div class="container">
	<div class="row">
		<div class="formularioGeneral col-md-10">

			<div class="encabezadoFormulario">
				<div class="titForm01">
					<h4>MODIFICACIÓN DE LOS REGISTROS DE ATENCIÓN</h4>
				</div>
				<div class="titForm02">
					<a href="../../gestionatencion.php"><button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>
				</div>
			</div>

			<div class="cuerpoFormulario">
				<form action="../../../controlador/atenciones/actualizaAtencion.php" method="POST">
				<?php
					include("../../../modelo/conexion.php");
					$id = $_REQUEST['id'];
					$sql = "SELECT * FROM atenciones WHERE id_atencion = '$id'";
					$respuesta = $conexion->query($sql);
					$atencion = $respuesta->fetch_assoc();
				?>
				  <input type="hidden" name="id_atencion" value="<?php echo $atencion['id_atencion'];?>" class="form-control" id="">

				  <div class="input-group form-group">
					<span class="input-group-addon" id="sizing-addon2">ID</span>
					<span class="form-control" aria-describedby="sizing-addon2"><?php echo $atencion['id_atencion'];?></span>
					<span class="input-group-addon" id="sizing-addon2">EXPEDIENTE</span>
				    <input type="text" name="expediente" value="<?php echo $atencion['expediente'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
					<span class="input-group-addon" id="sizing-addon2">RAZÓN SOCIAL</span>
				    <input type="text" name="razonsocial" value="<?php echo $atencion['razonsocial'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				  	<span class="input-group-addon" id="sizing-addon2">F. DE ATENCION</span>
				    <input type="date" name="fechaatencion" value="<?php echo $atencion['fechaatencion'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">F. DE RESULTADO</span>
				    <input type="date" name="fecharesultado" value="<?php echo $atencion['fecharesultado'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  
				  <div class="input-group form-group">
				    <span class="input-group-addon"  id="sizing-addon2">CONSULTANTE</span>
				    <input type="text" name="consultante" value="<?php echo $atencion['consultante'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon"  id="sizing-addon2">ASISTENTE</span>
				    <input type="text" name="asistente" value="<?php echo $atencion['asistente'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">ASUNTO</span>
				    <textarea type="text" name="asunto" class="form-control" id="" aria-describedby="sizing-addon2" rows="3" id="comment"><?php echo $atencion['asunto'];?></textarea>
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">OBSERVACIÓN</span>
				    <input type="text" name="observacion" value="<?php echo $atencion['observacion'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">ESTADO</span>
				    <input type="text" name="estado" value="<?php echo $atencion['estado'];?>" class="form-control" id="" aria-describedby="sizing-addon2" style="background: #FFE793;">
				  </div>

				  <button type="submit" class="btn btn-primary btn-sm" style="margin-bottom: 20px">MODIFICAR</button>
				</form>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript" charset="utf8" src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>