
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>gerensys</title>
  <link rel="stylesheet" href="../jqueryui/jquery-ui.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="stylesheet" href="../css/normalize.css"> 
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../datatables/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../datatables/buttons.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../datatables/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../datatables/font-awesome.min.css">
  <script src="../js/jquery-1.12.4.min.js"></script>
  <script src="../js/interacciones.js"></script>
  <script src="../jqueryui/jquery-ui.js"></script>
  
  <script type="text/javascript">
    // makes sure the whole site is loaded
  jQuery(window).load(function() {
          // will first fade out the loading animation
    jQuery("#estado").fadeOut();
          // will fade out the whole DIV that covers the website.
    jQuery("#cargador").delay(1000).fadeOut("slow");
  })
  </script>

</head>
<body>
<body style="background: #595959;">

<div id="cargador">
  <div id="estado"></div>
</div>

<div id="navGeneral">
      <ul>
        <li><a href="iniciogeneral.php"><span class="glyphicon glyphicon-home"></span> INFORMACIÓN GENERAL</a></li>
        <li><a href="gestioncontable.php"><span class="glyphicon glyphicon-folder-close"></span> GESTIÓN CONTABLE</a></li>
        <li><a href="gestiontributaria.php"><span class="glyphicon glyphicon-list-alt"></span> GESTIÓN TRIBUTARA</a></li>
        <li><a href="gestionadministrativa.php"><span class="glyphicon glyphicon-briefcase"></span> GESTIÓN ADMINISTRATIVA</a></li>
        <li><a href="gestionatencion.php"><span class="glyphicon glyphicon-user"></span> ATENCIÓN AL CLIENTE</a></li>
      </ul>
</div>
<div id="titGeneral">
    <h3>GESTIÓN TRIBUTARIA</h3>
</div>
<div id="tabGestionTributaria">
  <ul>
    <li><a href="#tabGesTri_regCompras"><span class="glyphicon glyphicon-pushpin"> REG. COMPRAS </span></a></li>
    <li><a href="#tabGesTri_regVentas"><span class="glyphicon glyphicon-calendar"> REG. VENTAS </span></a></li>
    <li><a href="#tabGesTri_impuestos"><span class="glyphicon glyphicon-calendar"> IMPUESTOS </span></a></li>
    <li><a href="#tabGesTri_pdt"><span class="glyphicon glyphicon-phone-alt"> PDT</span></a></li>
  </ul>
    <!-- CÓDIGO PARA EL TAB DE LOS CLIENTES -->
    <div id="tabGesTri_regCompras">
    <h4>REGISTRO DE COMPRAS</h4>
    </div>
    <!-- -->

    <!-- CÓDIGO PARA EL TAB DE LOS CALENDARIOS -->
    <div id="tabGesTri_regVentas">
    <h4>REGISTRO DE VENTAS</h4>
    </div>
    <!-- -->

    <!-- CÓDIGO PARA EL TAB DE LA AGENDA -->
    <div id="tabGesTri_impuestos">
    <h4>IMPUESTOS</h4>
    </div>
    <!-- -->

    <!-- CÓDIGO PARA EL TAB DE LA AGENDA -->
    <div id="tabGesTri_pdt">
    <h4>PDT'S</h4>
    </div>
    <!-- -->
  
</div>
<script>


</script>

<script type="text/javascript" charset="utf8" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/buttons.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/dataTables.buttons.min.js"></script>


</body>
</html>