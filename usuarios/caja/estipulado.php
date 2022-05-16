<?php
include("../../conexion.php");

session_start();


$pag=$_POST['pag'];

$estipulado=$_POST['estipulado'];
$pista=$_POST['pista'];
$horario=$_POST['horario'];

$mes=date(m);
$fecha=date("Y:m:d");
$dia=date("d");

//////////////////////////////////////////////////////////////////////////////////////comprueba si existe  RESERVA TEMPORAL  //////////////////////////
$estipulado_id= mysqli_query($conexion, "SELECT MAX(id) FROM $tabla26");

	while ($registro=mysqli_fetch_row($estipulado_id)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }
$id=$clave+1;	
				
			$campos="id,fecha,mes,dia,estipulado,pista,horario";
			$datos="'$id','$fecha','$mes','$dia','$estipulado','$pista','$horario'";
				
				$sentencia="INSERT INTO $tabla26 ($campos) VALUES ($datos) ";
				$inserta=mysqli_query($conexion, $sentencia);
				

		header ("Location: reservas2.php");

?>