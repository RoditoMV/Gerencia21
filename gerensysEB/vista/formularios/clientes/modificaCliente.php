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
		<div class="formularioGeneral col-md-12">

			<div class="encabezadoFormulario">
				<div class="titForm01">
					<h3>MODIFICACIÓN DE CLIENTES</h3>
				</div>
				<div class="titForm02">
					<a href="../../iniciogeneral.php"><button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>
				</div>

			</div>

			<div class="cuerpoFormulario">
				<form action="../../../controlador/clientes/actualizaCliente.php" method="POST">
				<?php
					include("../../../modelo/conexion.php");
					$id = $_REQUEST['id'];
					$sql = "SELECT * FROM clientes WHERE id_cliente = '$id'";
					$respuesta = $conexion->query($sql);
					$cliente = $respuesta->fetch_assoc();
				?>
				  <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente'];?>" class="form-control" id="" aria-describedby="sizing-addon2">

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">RAZÓN SOCIAL</span>
				    <input type="text" name="razonsocial" value="<?php echo $cliente['razonsocial'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				  	<span class="input-group-addon" id="sizing-addon2">RUC</span>
				    <input type="text" name="ruc" value="<?php echo $cliente['ruc'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">USUARIO SOL</span>
				    <input type="text" name="usuariosol" value="<?php echo $cliente['usuariosol'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">CLAVE SOL</span>
				    <input type="text" name="clavesol" value="<?php echo $cliente['clavesol'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">CLAVE RNP</span>
				    <input type="text" name="clavernp" value="<?php echo $cliente['clavernp'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  
				  <div class="input-group form-group">
				    <span class="input-group-addon"  id="sizing-addon2">USUARIO AFP</span>
				    <input type="text" name="usuarioafp" value="<?php echo $cliente['usuarioafp'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">CLAVE AFP</span>
				    <input type="text" name="claveafp" value="<?php echo $cliente['claveafp'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">DNI REP.</span>
				    <input type="text" name="dnirepresentante" value="<?php echo $cliente['dnirepresentante'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				  	<span class="input-group-addon" id="sizing-addon2">REP. LEGAL</span>
				    <input type="text" name="representante" value="<?php echo $cliente['representante'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">RÉGIMEN</span>
				    <input type="text" name="regimen" value="<?php echo $cliente['regimen'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">ESTADO</span>
				    <input type="text" name="estado" value="<?php echo $cliente['estado'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">RESPONSABLE</span>
				    <input type="text" name="responsable" value="<?php echo $cliente['responsable'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">PART. REGISTRAL</span>
				    <input type="text" name="partidaregistral" value="<?php echo $cliente['partidaregistral'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">CTA. DETRACCIONES</span>
				    <input type="text" name="cuentadetracciones" value="<?php echo $cliente['cuentadetracciones'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">CTA. CORRIENTE</span>
				    <input type="text" name="cuentacorriente" value="<?php echo $cliente['cuentacorriente'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">CTA. DE AHORROS</span>
				    <input type="text" name="cuentaahorros" value="<?php echo $cliente['cuentaahorros'];?>" class="form-control" id="" aria-describedby="sizing-addon2">
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