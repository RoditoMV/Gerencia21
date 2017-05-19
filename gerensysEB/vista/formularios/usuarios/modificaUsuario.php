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
		<div class="formularioGeneral col-md-8">

			<div class="encabezadoFormulario">
				<div class="titForm01">
					<h3>MODIFICACIÓN DE USUARIOS</h3>
				</div>
				<div class="titForm02">
					<a href="../../iniciogeneral.php"><button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>
				</div>
			</div>

			<div class="cuerpoFormulario">
				<form action="../../../controlador/usuarios/actualizaUsuario.php" method="POST">
				<?php
					include("../../../modelo/conexion.php");
					$id = $_REQUEST['id'];
					$sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
					$respuesta = $conexion->query($sql);
					$usuario = $respuesta->fetch_assoc();
				?>
				  <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">NOMBRES</span>
				    <input type="text" name="nombres" value="<?php echo $usuario['nombres'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">E-MAIL</span>
				    <input type="text" name="email" value="<?php echo $usuario['email'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">TELÉFONO</span>
				    <input type="text" name="telefono" value="<?php echo $usuario['telefono'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon"  id="sizing-addon2">USUARIO</span>
				    <input type="text" name="usuario" value="<?php echo $usuario['usuario'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">TIPO</span>
				    <input type="text" name="tipo" value="<?php echo $usuario['tipo'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
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