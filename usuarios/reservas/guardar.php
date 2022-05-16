<?php
include("../../conexion.php");
$reserva='reservas.php';
session_start();

$pista=$_POST['pista'];
$dia=$_POST['dia'];
$hora_inicio=$_POST['hora_inicio'];

$id_usuario=$_SESSION['id'];

$nombre1=$_POST['nombre1'];

$nombre2=$_POST['nombre2'];

$nombre3=$_POST['nombre3'];

$nombre4=$_POST['nombre4'];


$pagado1=$_POST['pagado1'];
$pagado2=$_POST['pagado2'];
$pagado3=$_POST['pagado3'];
$pagado4=$_POST['pagado4'];

$cervezas=$_POST['cervezas'];
$agua=$_POST['agua'];
$tienda=$_POST['tienda'];

$total=$_POST['total'];

$mes_select=$_POST['mes_select'];

$id_reserva=$_POST['id_reserva'];

$ano=date('y');

//echo $mes_select;
//////////////////////////////////////////////////////////////////////////////////////comprueba si existe  RESERVA TEMPORAL  //////////////////////////

	$ssql_temporal = "SELECT nombre1 FROM `$tabla13` WHERE pista='$pista' AND hora='$hora_inicio' AND dia='$dia'"; //selecciona si la pista esta ocupada TEMPORAL. 

	$resultado_temporal = mysqli_query($conexion, $ssql_temporal);
	//$row_temporal = mysqli_fetch_object($resultado_temporal);
	$nr_temporal = mysqli_num_rows($resultado_temporal);
	//echo $nr_temporal;

if ($nr_temporal<=0){
		


$total_s= $pagado1 + $pagado2 + $pagado3 + $pagado4/* + $cervezas + $agua + $tienda*/;

		$campos="id_reserva,pista,dia,mes,ano,hora,nombre1,nombre2,nombre3,nombre4,pagado1,pagado2,pagado3,pagado4,total,cervezas,agua,tienda";
		$datos="'$id_reserva','$pista','$dia','$mes_select','$ano','$hora_inicio','$nombre1','$nombre2','$nombre3','$nombre4','$pagado1','$pagado2','$pagado3','$pagado4','$total_s','$cervezas','$agua','$tienda'";
	
		$sentencia="INSERT INTO $tabla13 ($campos) VALUES ($datos) ";
	
		$inserta=mysqli_query($conexion, $sentencia);
		
					
			$campos="id_reserva,pista,dia,mes,ano,hora,nombre1,nombre2,nombre3,nombre4,pagado1,pagado2,pagado3,pagado4,total,cervezas,agua,tienda";
			$datos="'$id_reserva','$pista','$dia','$mes_select','$ano','$hora_inicio','$nombre1','$nombre2','$nombre3','$nombre4','$pagado1','$pagado2','$pagado3','$pagado4','$total_s','$cervezas','$agua','$tienda'";

				
				$sentencia="INSERT INTO $tabla13 ($campos) VALUES ($datos) WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio' ";
				$inserta=mysqli_query($conexion, $sentencia);
				
				
	//		echo $mes_select;
				
	header ("Location: ".$reserva);
		
}else{
$total_s= $pagado1 + $pagado2 + $pagado3 + $pagado4 + $cervezas + $agua + $tienda;
//echo "si no es mayo que 0";
///////////////////////////////////////////////////////////////////////////////	
		$cambiar_nombre1="nombre1='$nombre1'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_nombre1 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio' ";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;
		
///////////////////////////////////////////////////////////////////////////////		
		$cambiar_nombre2="nombre2='$nombre2'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_nombre2 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;

///////////////////////////////////////////////////////////////////////////////		
		$cambiar_nombre3="nombre3='$nombre3'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_nombre3 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;		

///////////////////////////////////////////////////////////////////////////////		
		$cambiar_nombre4="nombre4='$nombre4'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_nombre4 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;		
///////////////////////////////////////////////////////////////////////////////	
/*

*/
///////////////////////////////////////////////////////////////////////////////	
		$cambiar_pagado1="pagado1='$pagado1'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_pagado1 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio' ";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;
		
///////////////////////////////////////////////////////////////////////////////		
		$cambiar_pagado2="pagado2='$pagado2'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_pagado2 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;

///////////////////////////////////////////////////////////////////////////////		
		$cambiar_pagado3="pagado3='$pagado3'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_pagado3 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;		

///////////////////////////////////////////////////////////////////////////////		
		$cambiar_pagado4="pagado4='$pagado4'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_pagado4 WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;		
///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////		
		$cambiar_total="total='$total_s'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_total WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;	
///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////		
		$cambiar_mes="mes='$mes_select'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_mes WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;	
///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////		////////////////////////////////////////////////////
		$cambiar_cervezas="cervezas='$cervezas'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_cervezas WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;	
///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////		
		$cambiar_agua="agua='$agua'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_agua WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;	
///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////		
		$cambiar_tienda="tienda='$tienda'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_tienda WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($conexion, $sentencia);
		//echo $sentencia;	
///////////////////////////////////////////////////////////////////////////////	
///////////////////////////////////////////////////////////////////////////////		
	/*	$cambiar_id_reserva="id_reserva='$id_reserva'";

		$sentencia="UPDATE $base . `$tabla13` SET $cambiar_id_reserva WHERE dia='$dia' AND pista='$pista' AND hora='$hora_inicio'";
		$modifica=mysqli_query($sentencia,$conexion);
		//echo $sentencia;	*/
///////////////////////////////////////////////////////////////////////////////	

//echo $mes_select;
//echo "Total 2 | ";
//echo $total;
}

		header ("Location: reservas.php");

?>