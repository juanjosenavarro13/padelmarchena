<?php
include ("seguridad.php");
include("../conexion.php");

$bloque_horario=$_POST['bloque'];
$bloque_horario_fs=$_POST['bloque_fs'];
$nombre=$_POST['nombre_pista'];
$descripcion=$_POST['descripcion'];
$pag=$_POST['pag'];

//////////////////////////////				GENERA LA ULTIMA PISTA       ///////////////////////////

$npista= mysqli_query($conexion,"SELECT MAX(id_pista) FROM $tabla2");

	while ($registro=mysqli_fetch_row($npista)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_pista=$clave+1;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$campos="id_pista,nombre,descripcion,bloque,bloque_fs";
	$datos="'$id_pista','$nombre','$descripcion','$bloque_horario','$bloque_horario_fs'";
	
	$sentencia="INSERT INTO $tabla2 ($campos) VALUES ($datos)";
	
	$inserta=mysqli_query($conexion,$sentencia);

header ("Location: $pag");


?>