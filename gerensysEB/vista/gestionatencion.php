
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
    <h3>ATENCIÓN AL CLIENTE</h3>
</div>

<div id="tabGestionAtencion">

    <ul>
      <li><a href="#tabatencion"><span class="glyphicon glyphicon-comment"> REG. ATENCIÓN</span></a></li>
    </ul>

   <!-- CÓDIGO PARA EL TAB DE LA GESTIÓN DE ATENCIONES -->
    <div id="tabatencion">
      <h4>REGISTRO DE ATENCIÓN</h4>

      <div class="bannerBotones">
        <a href="formularios/atenciones/ingresoAtencion.php"> <button class="btn btn-primary btn-xs">Nueva Atención</button> </a>
      </div>

      <table id="tabla_atenciones" class="display cell-border compact table-bordered" style="width:100%;">
        <thead>
            <tr style="background: #99393C; color: #fff;">
              <td>ID</td>
              <td>FECHA DE ATENCIÓN</td>
              <td>FECHA DE RESULTADO</td>
              <td>EXPEDIENTE</td>
              <td>RAZÓN SOCIAL</td>
              <td>CONSULTANTE</td>
              <td>ASUNTO</td>
              <td>ASISTENTE</td>
              <td>OBSERVACIÓN</td>
              <td>ESTADO</td>
              <td>ACCIONES</td>
            </tr>
        </thead>
        <tbody>
          <?php
            include("../modelo/conexion.php");

            $sql = "SELECT * FROM atenciones";
            $respuesta = $conexion->query($sql);
            while ($atencion=$respuesta->fetch_assoc()) 

            { 
          ?>
              <tr>
                <td><?php  echo $atencion['id_atencion'];?></td>
                <td><?php  echo $atencion['fechaatencion'];?></td>
                <td><?php  echo $atencion['fecharesultado'];?></td>
                <td><?php  echo $atencion['expediente'];?></td>
                <td><?php  echo $atencion['razonsocial'];?></td>
                <td><?php  echo $atencion['consultante'];?></td>
                <td><?php  echo $atencion['asunto'];?></td>
                <td><?php  echo $atencion['asistente'];?></td>
                <td><?php  echo $atencion['observacion'];?></td>
                <td><?php  echo $atencion['estado'];?></td>
                <td> 

                  <a href="formularios/atenciones/modificaAtencion.php?id=<?php  echo $atencion['id_atencion'];?>" style="text-decoration: none;"> 
                    <button class="btn btn-warning btn-xs"> 
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </a> 

                  <a href="../controlador/atenciones/eliminaAtencion.php?id=<?php echo $atencion['id_atencion']?>" onclick="return Eliminar();" style="text-decoration: none;"> 
                    <button class="btn btn-danger btn-xs"> 
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </a>

                  <a href="detalles/atenciones/detallaAtencion.php?id=<?php  echo $atencion['id_atencion'];?>" style="text-decoration: none;">
                    <button class="btn btn-primary btn-xs"> 
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                  </a>

                </td>

              </tr>
          <?php

            }

          ?>
              
        </tbody>
      </table>

    </div>
    <!-- -->
  
</div>

<script type="text/javascript" charset="utf8" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/buttons.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/dataTables.buttons.min.js"></script>


</body>
</html>