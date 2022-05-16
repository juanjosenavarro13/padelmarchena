<?php
include ("../seguridad.php");
include("../../conexion.php");

$descripcion=$_POST['descripcion'];
$precio_soc=$_POST['precio_soc'];
$precio_nosoc=$_POST['precio_nosoc'];
$pag=$_POST['pag'];

//////////////////////////////				GENERA LA ULTIMA TARIFA       ///////////////////////////

$ntarifa= mysql_query("SELECT MAX(id_tarifa) FROM $tabla15");

	while ($registro=mysql_fetch_row($ntarifa)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_tarifa=$clave+1;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$campos="id_tarifa,descripcion,precio_soc,precio_nosoc";
	$datos="'$id_tarifa','$descripcion','$precio_soc','$precio_nosoc'";
	
	$sentencia="INSERT INTO $tabla15 ($campos) VALUES ($datos)";
	
	$inserta=mysql_query($sentencia,$conexion);

header ("Location: $pag");


?>