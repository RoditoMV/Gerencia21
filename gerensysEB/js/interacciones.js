
/*CODIGO DE LAS TABS*/
$( function() {
      $( "#tabInicioGeneral" ).tabs();
      $( "#tabGestionContable" ).tabs();
      $( "#tabGestionTributaria" ).tabs();
      $( "#tabGestionAdministrativa" ).tabs();
      $( "#tabGestionAtencion" ).tabs();
});

/*------------------------*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*CODIGO DE LAS DATATABLES*/
$(document).ready( function () {
    $('#tabla_clientes').DataTable({
    	"order":[[12, "desc"]]
    });
    $('#tabla_sunatcalendarios').DataTable({
    	"order":[[1, "asc"]]
    });
    $('#tabla_agendas').DataTable({
    	"order":[[11, "desc"]]
    });
    $('#tabla_atenciones').DataTable({
      "order":[[1, "desc"]]
    });
    $('#tabla_usuarios').DataTable({
      "order":[[7, "desc"]]
    });
} );
/*------------------------*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*CODIGO LA VENTANA DE ADVERTENCIA*/
function Eliminar(){
	 var ventana = confirm("¿Está seguro de Eliminar el Registro?","");
	 return ventana;
}
/*------------------------*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*CODIGO DE LA GESTION CLIENTES*

/*------------------------*/ 
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*CODIGO DE LA GESTION USUARIOS*/

/*------------------------*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

