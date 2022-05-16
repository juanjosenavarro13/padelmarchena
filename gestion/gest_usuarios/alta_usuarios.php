<?php
include ("../seguridad.php");
include("../../includes.php");
include("../../conexion.php");
include("../includes_gestion.php");
include ("calendario/calendario.php");
session_start();

encabezado();

?>
	<script language="JavaScript" src="calendario/javascripts.js"></script>
	<link href='../../estilos.css' rel='stylesheet' type='text/css' />
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
if($_GET['id_solicitud']==''){
alta_usuarios();
}else{
confirmar_usuarios();
}
//altaClientes();
/*
noticias1();
noticias2();
muro1();
muro2();
partidos1();
partidos2();
*/
cuerpo2();
col_derecha1();
eventos1();

eventos2();
saldo1();
saldo2();
torneos1();
torneos2();
actividades1();
actividades2();
col_derecha2();
pie();




?>