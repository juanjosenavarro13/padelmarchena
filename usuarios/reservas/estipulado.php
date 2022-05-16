<?php
include("../../conexion.php");

session_start();


$pag=$_POST['pag'];

$estipulado=$_POST['estipulado'];
$pista=$_POST['pista'];

$hora_inicio=$_POST['hora_inicio'];
$fecha_selec=$_POST['fecha'];

$dia_selec=$_POST['dia_selec'];

$mes=date(m);
$fecha=date("Y:m:d");
$dia_hoy=date("d");

//////////////////////////////////////////////////////////////////////////////////////nuevas id  //////////////////////////
$estipulado_id=   mysqli_query($conexion, "SELECT MAX(id) FROM $tabla26");

	while ($registro= mysqli_fetch_row($estipulado_id)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }
//////////////////////////////////////////////////////////////////////////////////////nuevas id  //////////////////////////
$consulta=   mysqli_query($conexion, "select * from `$tabla26` WHERE pista='$pista' and horario='$hora_inicio'");///// 

	while ($rows =  mysqli_fetch_array($consulta)) {
		
	$hora_consulta=$rows['horario'];
	$pista_consulta=$rows['pista'];
	$id_consulta=$rows['id'];
	$dia_consulta=$rows['dia'];
		
	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($hora_inicio==$hora_consulta and $pista==$pista_consulta and $dia_selec==$dia_consulta){
	
$id=$id_consulta;	
							
		$cambiar_estipulado="estipulado='$estipulado'";		

		$sentencia="UPDATE $base . `$tabla26` SET $cambiar_estipulado WHERE pista='$pista' and horario='$hora_inicio' and id='$id_consulta'";
		$modifica= mysqli_query($conexion, $sentencia);

		header ("Location: reservas.php");
		
}else{
	$id=$clave+1;	
				
			$campos="id,fecha,mes,dia,estipulado,pista,horario";
			$datos="'$id','$fecha_selec','$mes','$dia_selec','$estipulado','$pista','$hora_inicio'";
				
				$sentencia="INSERT INTO $tabla26 ($campos) VALUES ($datos) ";
				$inserta= mysqli_query($conexion, $sentencia);
				
		header ("Location: reservas.php");
	
	
}
?>