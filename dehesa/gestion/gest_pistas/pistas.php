<?php 
include("../../conexion.php");
session_start();
include ("../seguridad.php");
$cliente=$_SESSION["id"];
$fecha=date(Y."/".m."/".d);
$pag=$_SERVER['PHP_SELF'];

if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysql_query("DELETE FROM $tabla2 WHERE id_pista='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="borrar_bloque"){
	$id_borrar= $_GET['id'];
	mysql_query("DELETE FROM $tabla4 WHERE id_bloque='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	mysql_close();
	header ("Location: editar_pista.php?id_pista=$id_modificar");
	exit;
}

//include ("../seguridad.php");
include("../../includes.php");
include("../includes_gestion.php");
//include("enlaces.php");
session_start();
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

listadoPistas();

?>

<hr>
<?php

listadoBloques();

echo "<hr>";
echo "<div id='boton_nuevo'><a href='alta_tarifas.php'>NUEVA TARIFA</a></div>";
listadoTarifas();

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
