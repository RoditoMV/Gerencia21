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
					<h3>REGISTRO DE CLIENTES NUEVOS</h3>
				</div>
				<div class="titForm02">
					<a href="../../iniciogeneral.php"><button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>
				</div>
			</div>

			<div class="cuerpoFormulario">
				<form action="../../../controlador/clientes/registroCliente.php" method="POST">

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">RAZÓN SOCIAL</span>
				    <input type="text" name="razonsocial" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				  	<span class="input-group-addon" id="sizing-addon2">RUC</span>
				    <input type="text" name="ruc" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">USUARIO SOL</span>
				    <input type="text" name="usuariosol" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">CLAVE SOL</span>
				    <input type="text" name="clavesol" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">CLAVE RNP</span>
				    <input type="text" name="clavernp" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  
				  <div class="input-group form-group">
				  	<span class="input-group-addon"  id="sizing-addon2">USUARIO AFP</span>
				    <input type="text" name="usuarioafp" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">CLAVE AFP</span>
				    <input type="text" name="claveafp" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">DNI REP.</span>
				    <input type="text" name="dnirepresentante" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon"  id="sizing-addon2">REP. LEGAL</span>
				    <input type="text" name="representante" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">RÉGIMEN</span>
				    <input type="text" name="regimen" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">ESTADO</span>
				    <input type="text" name="estado" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">RESPONSABLE</span>
				    <input type="text" name="responsable" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">PART. REGISTRAL</span>
				    <input type="text" name="partidaregistral" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">CTA. DETRACCIONES</span>
				    <input type="text" name="cuentadetracciones" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">CTA. CORRIENTE</span>
				    <input type="text" name="cuentacorriente" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">CTA. DE AHORROS</span>
				    <input type="text" name="cuentaahorros" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <button type="submit" class="btn btn-primary btn-sm" style="margin-bottom: 20px">REGISTRAR</button>
				</form>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript" charset="utf8" src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>