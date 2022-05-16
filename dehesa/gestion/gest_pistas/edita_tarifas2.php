<?php
include("../../conexion.php");
include ("../seguridad.php");
$id_tarifa=$_POST['id_tarifa'];
$descripcion=$_POST['descripcion'];
$precio_soc=$_POST['precio_soc'];
$precio_nosoc=$_POST['precio_nosoc'];
$pag=$_POST['pag'];


$campos="id_tarifa='$id_tarifa', descripcion='$descripcion', precio_soc='$precio_soc', precio_nosoc='$precio_nosoc'";

	
$sentencia="UPDATE $base . `$tabla15` SET $campos WHERE $tabla15 . id_tarifa=$id_tarifa ";
//echo $sentencia;
$modifica=mysql_query($sentencia,$conexion);

header ("Location: $pag?tarifa=$id_tarifa&msj=1");


?>