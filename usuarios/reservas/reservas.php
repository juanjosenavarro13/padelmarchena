<?php
include("../../conexion.php");
include("../../seguridad.php");
session_start();
$usuario=$_SESSION['id'];
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="anular"){
	$id_anular= $_GET['id'];
	if($_SESSION['privilegios']==1){
		mysqli_query($conexion, "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'") or die(mysqli_error());
	}else{
		mysqli_query($conexion, "DELETE FROM $tabla5 WHERE id_reserva='$id_anular' AND usuario='$usuario'") or die(mysqli_error());
	}
	mysqli_close();
	$pagina=$_GET['pagina'];
	//echo "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
	//echo "pagina: ".$pag;
	header ("Location: $pag");
	exit;
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

require ("calendario.php");
include("pistas.php");


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
//echo $usuario;

listaPistas($fecha);

echo "<br><hr>";

?>
<br />

<div id="cont_c8ff1100bf390136b6b96c66982b11d8">
<span id="h_c8ff1100bf390136b6b96c66982b11d8"><a id="a_c8ff1100bf390136b6b96c66982b11d8" href="http://www.tiempo.com/marchena.htm" target="_blank" style="color:#000000;font-family:1;font-size:14px;"> </a></span>
<script type="text/javascript" src="http://www.tiempo.com/wid_loader/c8ff1100bf390136b6b96c66982b11d8"></script></div>
<br />
<?php
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