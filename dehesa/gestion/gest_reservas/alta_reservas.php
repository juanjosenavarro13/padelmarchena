<?php
include ("../seguridad.php");
include("../../conexion.php");
session_start();
$usuario=$_SESSION['id'];
$pag=$_SERVER['PHP_SELF'];
include("../includes_gestion.php");
if ($_GET['accion']=="anular"){
	borrar_reserva();
}
include("../../includes.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

enlaces_reservas();
$usuario=$_SESSION["id"];

$nuevo_dia=$_POST['seleccionado'];
$nuevo_mes=$_POST['mes_actual'];
$nuevo_ano=$_POST['ano_actual'];


if (!$_POST){
	$tiempo_actual = time();
	$mes = date("n", $tiempo_actual);
	$ano = date("Y", $tiempo_actual);
	$dia=date("d");
	$fecha=$ano . "-" . $mes . "-" . $dia;
}else {
	$mes = $nuevo_mes;
	$ano = $nuevo_ano;
	$dia = $nuevo_dia;
	$fecha=$ano . "-" . $mes . "-" . $dia;
}
$pag=$_SERVER['PHP_SELF'];  // el nombre y ruta de esta misma pÃ¡gina.

//echo"Fecha Seleccionada <input type=text name=fecha value=$fecha>";
mostrar_calendario($dia,$mes,$ano);

echo "<br><hr>";

listaPistas($fecha);

///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

cuerpo2();
/*
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
*/
pie();

?>