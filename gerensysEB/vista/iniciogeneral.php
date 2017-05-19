
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
    <h3>INFORMACIÓN GENERAL</h3>
</div>
<div id="tabInicioGeneral">
  <ul>
    <li><a href="#tabclientes"><span class="glyphicon glyphicon-th-list"> CLIENTES </span></a></li>
    <li><a href="#tabcalendarios"><span class="glyphicon glyphicon-calendar"> CALENDARIOS </span></a></li>
    <li><a href="#tabagenda"><span class="glyphicon glyphicon-phone-alt"> AGENDA</span></a></li>
    <li><a href="#tabusuarios"><span class="glyphicon glyphicon-user"> USUARIOS</span></a></li>
  </ul>
  <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <!-- CÓDIGO PARA EL TAB DE LOS CLIENTES -->
    <div id="tabclientes">
      <h4>GESTIÓN DE CLIENTES</h4>

      <div class="bannerBotones">
        <a href="formularios/clientes/ingresoCliente.php"> <button class="btn btn-primary btn-xs">Nuevo Cliente</button></a>
      </div>

      <table id="tabla_clientes" class="display cell-border compact table-bordered" style="width:100%;">
        <thead>
            <tr style="background: #99393C; color: #fff;">
              <td>ID</td>
              <td>RUC</td>
              <td>RAZÓN SOCIAL</td>
              <td>USUARIO SOL</td>
              <td>CLAVE SOL</td>
              <td>CLAVE RNP</td>
              <td>USUARIO AFP</td>
              <td>CLAVE AFP</td>
              <td>DNI REP.</td>
              <td>RÉGIMEN</td>
              <td>ESTADO</td>
              
              <td>ACCIONES</td>
              <td>ID</td>

            </tr>
        </thead>
        <tbody>
          <?php
            include("../modelo/conexion.php");

            $sql = "SELECT * FROM clientes ";
            $respuesta = $conexion->query($sql);
            while ($cliente=$respuesta->fetch_assoc()) 
            { 
          ?>
              <tr>
                <td><?php  echo $cliente['id_cliente'];?></td>
                <td><?php  echo $cliente['ruc'];?></td>
                <td><?php  echo $cliente['razonsocial'];?></td>
                <td><?php  echo $cliente['usuariosol'];?></td>
                <td><?php  echo $cliente['clavesol'];?></td>
                <td><?php  echo $cliente['clavernp'];?></td>
                <td><?php  echo $cliente['usuarioafp'];?></td>
                <td><?php  echo $cliente['claveafp'];?></td>
                <td><?php  echo $cliente['dnirepresentante'];?></td>
                <td><?php  echo $cliente['regimen'];?></td>
                <td><?php  echo $cliente['estado'];?></td>
                
                <td> 

                  <a href="formularios/clientes/modificaCliente.php?id=<?php  echo $cliente['id_cliente'];?>" style="text-decoration: none;"> 
                    <button class="btn btn-warning btn-xs" > 
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </a> 

                  <a href="../controlador/clientes/eliminaCliente.php?id=<?php echo $cliente['id_cliente']?>" onclick="return Eliminar();" style="text-decoration: none;"> 
                    <button class="btn btn-danger btn-xs"> 
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </a> 

                  <a href="detalles/clientes/detallaCliente.php?id=<?php  echo $cliente['id_cliente'];?>" style="text-decoration: none;">
                    <button class="btn btn-primary btn-xs"> 
                      <span class="glyphicon glyphicon-eye-open"></span>
                    </button>
                  </a>
                  
                </td>
                <td style="text-align: center;"><?php  echo $cliente['id_cliente'];?></td>
              </tr>
          <?php

            }

          ?>

        </tbody>
      </table> 

    </div>

    <!-- -->
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <!-- CÓDIGO PARA EL TAB DE LOS CALENDARIOS -->
    <div id="tabcalendarios">
    <h4>CALENDARIOS</h4>

      <div class="bannerBotones">
        <a href="formularios/sunatcalendarios/ingresoSunatcalendario.php"> <button class="btn btn-primary btn-xs">Nuevo Calendario</button> </a>
      </div>

      <table id="tabla_sunatcalendarios" class="display cell-border compact table-bordered" style="width:100%;">
        <thead>
            <tr style="background: #99393C; color: #fff;">
              <td>RAZÓN SOCIAL</td>
              <td>ÚLTIMO DÍGITO</td>
              <td>ENE</td>
              <td>FEB</td>
              <td>MAR</td>
              <td>ABR</td>
              <td>MAY</td>
              <td>JUN</td>
              <td>JUL</td>
              <td>AGO</td>
              <td>SET</td>
              <td>OCT</td>
              <td>NOV</td>
              <td>DIC</td>
              <td>ACCIONES</td>
            </tr>
        </thead>
        <tbody>
          <?php
            include("../modelo/conexion.php");

            $sql = "SELECT * FROM sunatcalendarios";
            $respuesta = $conexion->query($sql);
            while ($sunatcalendario=$respuesta->fetch_assoc()) 
            { 
          ?>
              <tr>
                <td><?php  echo $sunatcalendario['razonsocial'];?></td>
                <td><?php  echo $sunatcalendario['ultimodigito'];?></td>
                <td><?php  echo $sunatcalendario['ene'];?></td>
                <td><?php  echo $sunatcalendario['feb'];?></td>
                <td><?php  echo $sunatcalendario['mar'];?></td>
                <td><?php  echo $sunatcalendario['abr'];?></td>
                <td><?php  echo $sunatcalendario['may'];?></td>
                <td><?php  echo $sunatcalendario['jun'];?></td>
                <td><?php  echo $sunatcalendario['jul'];?></td>
                <td><?php  echo $sunatcalendario['ago'];?></td>
                <td><?php  echo $sunatcalendario['sep'];?></td>
                <td><?php  echo $sunatcalendario['oct'];?></td>
                <td><?php  echo $sunatcalendario['nov'];?></td>
                <td><?php  echo $sunatcalendario['dic'];?></td>
                <td> 

                  <a href="formularios/sunatcalendarios/modificaSunatcalendario.php?id=<?php  echo $sunatcalendario['id_sunatcalendario'];?>" style="text-decoration: none;"> 
                    <button class="btn btn-warning btn-xs"> 
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </a> 

                  <a href="../controlador/sunatcalendarios/eliminaSunatcalendario.php?id=<?php echo $sunatcalendario['id_sunatcalendario']?>" onclick="return Eliminar();" style="text-decoration: none;"> 
                    <button class="btn btn-danger btn-xs"> 
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </a>

                  <a href="detalles/sunatcalendarios/detallaSunatcalendario.php?id=<?php  echo $sunatcalendario['id_sunatcalendario']?>" style="text-decoration: none;">
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
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <!-- CÓDIGO PARA EL TAB DE LA AGENDA -->
    <div id="tabagenda">
    <h4>AGENDA</h4>

      <div class="bannerBotones">
        <a href="formularios/agendas/ingresoAgenda.php"> <button class="btn btn-primary btn-xs">Nueva Agenda</button> </a>
      </div>

      <table id="tabla_agendas" class="display cell-border compact table-bordered" style="width:100%;">
        <thead>
            <tr style="background: #99393C; color: #fff;">
              <td>ID</td>
              <td>RUC</td>
              <td>RAZÓN SOCIAL</td>
              <td>FIJO</td>
              <td>CELULAR</td>
              <td>CONTACTO</td>
              <td>CELULAR</td>
              <td>CONTACTO</td>
              <td>E-MAIL</td>
              <td>E-MAIL</td>
              <td>ACCIONES</td>
              <td>ID</td>
            </tr>
        </thead>
        <tbody>
          <?php
            include("../modelo/conexion.php");

            $sql = "SELECT * FROM agendas";
            $respuesta = $conexion->query($sql);
            while ($agenda=$respuesta->fetch_assoc()) 
            { 
          ?>
              <tr>
                <td><?php  echo $agenda['id_agenda'];?></td>
                <td><?php  echo $agenda['ruc'];?></td>
                <td><?php  echo $agenda['razonsocial'];?></td>
                <td><?php  echo $agenda['telefonofijo'];?></td>
                <td><?php  echo $agenda['celulara'];?></td>
                <td><?php  echo $agenda['contactoa'];?></td>
                <td><?php  echo $agenda['celularb'];?></td>
                <td><?php  echo $agenda['contactob'];?></td>
                <td><?php  echo $agenda['emaila'];?></td>
                <td><?php  echo $agenda['emailb'];?></td>
                <td> 

                  <a href="formularios/agendas/modificaAgenda.php?id=<?php  echo $agenda['id_agenda'];?>" style="text-decoration: none;"> 
                    <button class="btn btn-warning btn-xs"> 
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </a> 

                  <a href="../controlador/agendas/eliminaAgenda.php?id=<?php echo $agenda['id_agenda']?>" onclick="return Eliminar();" style="text-decoration: none;"> 
                    <button class="btn btn-danger btn-xs"> 
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </a>

                  
                </td>
                <td style="text-align: center;"><?php  echo $agenda['id_agenda'];?></td>
              </tr>
          <?php

            }

          ?>
              
        </tbody>
      </table>
    </div>
    <!-- -->
    
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <!-- CÓDIGO PARA EL TAB DE LOS USUARIOS -->
    <div id="tabusuarios">
      <h4>GESTIÓN DE USUARIOS</h4>

      <div class="bannerBotones">
        <a href="formularios/usuarios/ingresoUsuario.php"> <button class="btn btn-primary btn-xs">Nuevo Usuario</button> </a>
      </div>

      <table id="tabla_usuarios" class="display cell-border compact table-bordered" style="width:100%;">
        <thead>
            <tr style="background: #99393C; color: #fff;">
              <td>ID</td>
              <td>NOMBRES</td>
              <td>E-MAIL</td>
              <td>TELÉFONO</td>
              <td>USUARIO</td>
              <td>TIPO</td>
              <td>ACCIONES</td>
              <td>ID</td>
            </tr>
        </thead>
        <tbody>
          <?php
            include("../modelo/conexion.php");

            $sql = "SELECT * FROM usuarios";
            $respuesta = $conexion->query($sql);
            while ($usuario=$respuesta->fetch_assoc()) 
            { 
          ?>
              <tr>
                <td><?php  echo $usuario['id_usuario'];?></td>
                <td><?php  echo $usuario['nombres'];?></td>
                <td><?php  echo $usuario['email'];?></td>
                <td><?php  echo $usuario['telefono'];?></td>
                <td><?php  echo $usuario['usuario'];?></td>
                <td><?php  echo $usuario['tipo'];?></td>
                <td> 

                  <a href="formularios/usuarios/modificaUsuario.php?id=<?php  echo $usuario['id_usuario'];?>" style="text-decoration: none;">
                    <button class="btn btn-warning btn-xs"> 
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                  </a>

                  <a href="../controlador/usuarios/eliminaUsuario.php?id=<?php echo $usuario['id_usuario']?>" onclick="return Eliminar();" style="text-decoration: none;"> 
                    <button class="btn btn-danger btn-xs"> 
                      <span class="glyphicon glyphicon-trash"></span> 
                    </button>
                  </a>

                 

                </td>
                <td style="text-align: center;"><?php  echo $usuario['id_usuario'];?></td>
              </tr>
          <?php
            }
          ?>
              
        </tbody>
      </table>
    </div> 
<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
    <!-- -->
</div>




<script type="text/javascript" charset="utf8" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/buttons.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" charset="utf8" src="../datatables/dataTables.buttons.min.js"></script>


</body>
</html>
