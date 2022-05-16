<?php 
include ("../../seguridad.php");
include("../../conexion.php");
include("../includes_gestion.php");
$pag=$_SERVER['PHP_SELF'];
session_start();
$usuario=$_SESSION['id'];
$meapunto=$_GET['id_meapunto'];

if ($_GET['accion']=="anular"){
	$id_anular= $_GET['id'];
	/////////////////////////////		GENERA SI EL JUGADOR ES EL MISMO		///////////////////////////////
	$ssql_comprueba_jugador="SELECT id_cliente FROM $tabla9 WHERE id_cliente_meapunto='$id_anular'";
	$resultado_comprueba_jugador=mysql_query($ssql_comprueba_jugador);
	$row_comprueba_jugador=mysql_fetch_object($resultado_comprueba_jugador);
	$id_jugador_seguridad=$row_comprueba_jugador->id_cliente;
	if($id_jugador_seguridad==$_SESSION['id']){
	mysql_query("DELETE FROM $tabla9 WHERE id_cliente_meapunto='$id_anular'") or die(mysql_error());
	mysql_close();
	}
	header ("Location: gestion_meapunto.php");
	exit;
}

if ($_GET['accion']=="apuntar"){
	apuntar();
	$meapunto=$_GET['id'];
}

include("../../includes.php");
//include("enlaces.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

$hoy=date("Y-m-d");
$hora_hoy=date("H:i");


 // returns "2 weeks, 4 days, 23 hours, 25 minutes, and 3 seconds from now"
$tiempo_seg=time();

////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario_proximo = "select * FROM `$tabla3` WHERE id_horario=$horario_proximo";
	$resultado_horario_proximo = mysql_query($ssql_horario_proximo);
	if($resultado_horario_proximo!=''){
	$num_registros=mysql_num_rows($resultado_horario_proximo);
	$row_horario_proximo=mysql_fetch_object($resultado_horario_proximo);
	//$inicio_proximo=substr($row_horario->inicio,0,5);
	$hora_inicio_proximo=$row_horario_proximo->inicio;
	}
/////////////////////////////////////////////////////////////
	
tabla_apuntados($meapunto);

///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

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
<br><br>