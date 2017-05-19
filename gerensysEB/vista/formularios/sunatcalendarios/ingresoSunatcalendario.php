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
					<h3>REGISTROS DE CALENDARIOS</h3>
				</div>
				<div class="titForm02">
					<a href="../../iniciogeneral.php"><button class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-remove"></span></button></a>
				</div>
			</div>

			<div class="cuerpoFormulario">
				<form action="../../../controlador/sunatcalendarios/registroSunatcalendario.php" method="POST">
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">RAZON SOCIAL</span>
				    <input type="text" name="razonsocial" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">RUC</span>
				    <input type="text" name="ruc" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">ULTIMO DÍGITO</span>
				    <input type="text" name="ultimodigito" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon"  id="sizing-addon2">AÑO</span>
				    <input type="text" name="ano" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">ENERO</span>
				    <input type="text" name="ene" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">FEBRERO</span>
				    <input type="text" name="feb" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">MARZO</span>
				    <input type="text" name="mar" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>

				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">ABRIL</span>
				    <input type="text" name="abr" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">MAYO</span>
				    <input type="text" name="may" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">JUNIO</span>
				    <input type="text" name="jun" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">JULIO</span>
				    <input type="text" name="jul" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">AGOSTO</span>
				    <input type="text" name="ago" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">SETIEMBRE</span>
				    <input type="text" name="sep" class="form-control" id="" aria-describedby="sizing-addon2">
				  </div>
				  
				  <div class="input-group form-group">
				    <span class="input-group-addon" id="sizing-addon2">OCTUBRE</span>
				    <input type="text" name="oct" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">NOVIEMBRE</span>
				    <input type="text" name="nov" class="form-control" id="" aria-describedby="sizing-addon2">
				    <span class="input-group-addon" id="sizing-addon2">DICIEMBRE</span>
				    <input type="text" name="dic" class="form-control" id="" aria-describedby="sizing-addon2">
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