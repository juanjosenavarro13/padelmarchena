<?php
include("../../conexion.php");
$tarifa='tarifa_plana.php';
session_start();

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$telefono=$_POST['telefono'];

$precio=$_POST['precio'];

$mes=$_POST['mes'];

$id12=$_POST['id12'];

$ano= date('y');

$nreserva= mysqli_query($conexion, "SELECT MAX(id) FROM $tabla22");

	while ($registro=mysqli_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }



if ($id12=='GUARDAR'){
	
	
	$id=$clave+1;
	
		$campos="id,nombre,apellido,telefono,horas,precio,mes,ano";
		$datos="'$id','$nombre','$apellido','$telefono','$horas','$precio','$mes','$ano'";
	
		$sentencia="INSERT INTO $tabla22 ($campos) VALUES ($datos) ";
	
		$inserta=mysqli_query($conexion, $sentencia);
		
	
	header ("Location: ".$tarifa);
}
	
?>