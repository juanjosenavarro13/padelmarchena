<?php
include ("../seguridad.php");
include("../../conexion.php");

$bloque_horario=$_POST['bloque'];
$bloque_fs=$_POST['bloque_fs'];
$tipo_pago=$_POST['tipopago'];
$nombre=$_POST['nombre_pista'];
$descripcion=$_POST['descripcion'];
$pag=$_POST['pag'];

//////////////////////////////				GENERA LA ULTIMA PISTA       ///////////////////////////

$npista= mysql_query("SELECT MAX(id_pista) FROM $tabla2");

	while ($registro=mysql_fetch_row($npista)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_pista=$clave+1;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$campos="id_pista,nombre,descripcion,bloque,bloque_fs,Tipopago";
	$datos="'$id_pista','$nombre','$descripcion','$bloque_horario','$bloque_fs','$tipo_pago'";
	
	$sentencia="INSERT INTO $tabla2 ($campos) VALUES ($datos)";
	
	$inserta=mysql_query($sentencia,$conexion);

header ("Location: $pag");


?>