<?php 

include("../../conexion.php");
session_start();
include ("../seguridad.php");
$cliente=$_SESSION["id"];
$fecha=date(Y."/".m."/".d);
$pag=$_SERVER['PHP_SELF'];

if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla2 WHERE id_pista='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="borrar_bloque"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla4 WHERE id_bloque='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="modificar"){
	$id_modificar= $_GET['id'];
	mysqli_close();
	header ("Location: editar_pista.php?id_pista=$id_modificar");
	exit;
}

if ($_GET['accion']=="borrar_relacion"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla11 WHERE id_pista_bloque='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="borrar_bloque"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla4 WHERE id_bloque='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
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

relacionBloquesPistas();

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