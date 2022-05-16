<?php
include("../../conexion.php");
$abono='alta_abono.php';
session_start();

$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$nombre3=$_POST['nombre3'];
$nombre4=$_POST['nombre4'];

$precio1=$_POST['precio1'];
$precio2=$_POST['precio2'];
$precio3=$_POST['precio3'];
$precio4=$_POST['precio4'];

$mes=$_POST['mes'];
$horario=$_POST['horario'];
$dia=$_POST['dia'];

$id12=$_POST['id12'];


$nreserva= mysql_query("SELECT MAX(id) FROM $tabla24");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }



if ($id12=='GUARDAR'){
	
	
	$id=$clave+1;
	
		$campos="id,dia,horario,nombre1,nombre2,nombre3,nombre4,precio1,precio2,precio3,precio4,mes";
		$datos="'$id','$dia','$horario','$nombre1','$nombre2','$nombre3','$nombre4','$precio1','$precio2','$precio3','$precio4','$mes'";
	
		$sentencia="INSERT INTO $tabla24 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
	
	header ("Location: ".$abono);
}
	
?>