<?php
include("../../conexion.php");

session_start();

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$telefono=$_POST['telefono'];

$precio=$_POST['precio'];

$mes=$_POST['mes'];

$id12=$_POST['id12'];

$actualizar=$_POST['actualizar'];

$id_usuario=$_POST['id_usuario'];

$nreserva= mysql_query("SELECT MAX(id_usuario) FROM $tabla37");

	while ($registro=mysql_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	 	}
	 }



if ($id12=='GUARDAR'){
	
	$fecha=date("d-m-Y");
	$dia=date("j");
	$mes=date("m");
	$id=$clave+1;
	
		$campos="id_usuario,nombre,apellido,telefono,precio,fecha,dia,mes";
		$datos="'$id','$nombre','$apellido','$telefono','$precio','$fecha','$dia','$mes'";
	
		$sentencia="INSERT INTO $tabla37 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
		$campos_part="id_usuario,fecha_pago";
		$datos_part="'$id','$fecha'";
	
		$sentencia_part="INSERT INTO $tabla35 ($campos_part) VALUES ($datos_part) ";
	
		$inserta_part=mysql_query($sentencia_part,$conexion);
		
		$campos_fecha="id_usuario";
		$datos_fecha="'$id'";
	
		$sentencia_fecha="INSERT INTO $tabla36 ($campos_fecha) VALUES ($datos_fecha) ";
	
		$inserta_fecha=mysql_query($sentencia_fecha,$conexion);
		
	$bono='padelgym.php?id='.$id.'';
	
	header ("Location: ".$bono);
}
if ($actualizar=='ACTUALIZAR'){
	
	/*------ ACTUALIZAR USUARIO $tabla37 ----*/
	$fecha=date("d-m-Y");
	$dia=date("j");
	$mes=date("m");
	$datos="fecha='$fecha',dia='$dia',mes='$mes'";
	mysql_query("UPDATE $base . `$tabla37` SET $datos WHERE id_usuario=$id_usuario");
	
	/*------ ACTUALIZAR PARTIDOS $tabla35 ----*/
	$partidos='0';
	$datos_partidos="b1='$partidos',b2='$partidos',b3='$partidos',b4='$partidos',b5='$partidos',b6='$partidos',b7='$partidos',b8='$partidos',b9='$partidos',b10='$partidos'";
	mysql_query("UPDATE $base . `$tabla35` SET $datos_partidos WHERE id_usuario=$id_usuario");
		
	/*------ ACTUALIZAR FECHA $tabla36 ----*/
	$fecha='0';
	$datos_fecha="b1='$fecha',b2='$fecha',b3='$fecha',b4='$fecha',b5='$fecha',b6='$fecha',b7='$fecha',b8='$fecha',b9='$fecha',b10='$fecha'";
	mysql_query("UPDATE $base . `$tabla36` SET $datos_fecha WHERE id_usuario=$id_usuario") or die(mysql_error());
	mysql_close();
	$bono='padelgym.php?id='.$id_usuario.'';
	
	header ("Location: ".$bono);
}
	
?>