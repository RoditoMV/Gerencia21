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
					<h3>MODIFICACIÓN DE USUARIOS</h3>
				</div>
				<div class="titForm02">
					<a href="../../iniciogeneral.php"><button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>
				</div>
			</div>

			<div class="cuerpoFormulario">
				<form action="../../../controlador/agendas/actualizaAgenda.php" method="POST">
				<?php
					include("../../../modelo/conexion.php");
					$id = $_REQUEST['id'];
					$sql = "SELECT * FROM agendas WHERE id_agenda = '$id'";
					$respuesta = $conexion->query($sql);
					$agenda = $respuesta->fetch_assoc();
				?>
				  <input type="hidden" name="id_agenda" value="<?php echo $agenda['id_agenda'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">RAZÓN SOCIAL</span>
				    <input type="text" name="razonsocial" value="<?php echo $agenda['razonsocial'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">RUC</span>
				    <input type="text" name="ruc" value="<?php echo $agenda['ruc'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">FIJO</span>
				    <input type="text" name="telefonofijo" value="<?php echo $agenda['telefonofijo'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">CELULAR</span>
				    <input type="text" name="celulara" value="<?php echo $agenda['celulara'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">CONTACTO</span>
				    <input type="text" name="contactoa" value="<?php echo $agenda['contactoa'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">CELULAR</span>
				    <input type="text" name="celularb" value="<?php echo $agenda['celularb'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">CONTACTO</span>
				    <input type="text" name="contactob" value="<?php echo $agenda['contactob'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">E-MAIL</span>
				    <input type="text" name="emaila" value="<?php echo $agenda['emaila'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">E-MAIL</span>
				    <input type="text" name="emailb" value="<?php echo $agenda['emailb'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
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