<?php
include("../../conexion.php");
include ("../seguridad.php");
$id_pista=$_POST['id_pista'];
$bloque_horario=$_POST['bloque'];
$bloque_horario_fs=$_POST['bloque_fs'];
$tipo_pago=$_POST['tipopago'];
$nombre=$_POST['nombre_pista'];
$descripcion=$_POST['descripcion'];
$pag=$_POST['pag'];


	$campos="id_pista='$id_pista', nombre='$nombre', descripcion='$descripcion', bloque='$bloque_horario', bloque_fs='$bloque_horario_fs', Tipopago='$tipo_pago'";

	
$sentencia="UPDATE $base . `$tabla2` SET $campos WHERE $tabla2 . id_pista=$id_pista ";
//echo $sentencia;
$modifica=mysql_query($sentencia,$conexion);

header ("Location: $pag?id_pista=$id_pista&msj=1");


?>