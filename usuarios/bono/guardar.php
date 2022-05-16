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

$borrar=$_POST['borrar'];

$id_usuario=$_POST['id_usuario'];

$editar=$_POST['editaBono'];

$ano= date('y');

$nreserva= mysqli_query($conexion, "SELECT MAX(id_usuario) FROM $tabla31");

	while ($registro=mysqli_fetch_row($nreserva)){
	       foreach($registro as $clave){ 
	 	}
	 }



if ($id12=='GUARDAR'){
	
	$fecha=date("d-m-Y");
	$dia=date("j");
	$mes=date("n");
	$id=$clave+1;
	
		$campos="id_usuario,nombre,apellido,telefono,precio,fecha,dia,mes,ano";
		$datos="'$id','$nombre','$apellido','$telefono','$precio','$fecha','$dia','$mes','$ano'";
	
		$sentencia="INSERT INTO $tabla31 ($campos) VALUES ($datos) ";
	
		$inserta=mysqli_query($conexion, $sentencia);
		
			$campos_part="id_usuario,fecha_pago";
			$datos_part="'$id','$fecha'";
		
			$sentencia_part="INSERT INTO $tabla32 ($campos_part) VALUES ($datos_part) ";
		
			$inserta_part=mysqli_query($conexion, $sentencia_part);
		
		$campos_fecha="id_usuario";
		$datos_fecha="'$id'";
	
		$sentencia_fecha="INSERT INTO $tabla33 ($campos_fecha) VALUES ($datos_fecha) ";
	
		$inserta_fecha=mysqli_query($conexion, $sentencia_fecha);

	$bono='bono.php?id='.$id.'';
	
	header ("Location: ".$bono);
}
if ($actualizar=='ACTUALIZAR'){
	
	/*------ ACTUALIZAR USUARIO $tabla31 ----*/
	$fecha=date("d-m-Y");
	$dia=date("j");
	$mes=date("n");
	$datos="fecha='$fecha',dia='$dia',mes='$mes',ano='$ano'";
	mysqli_query($conexion, "UPDATE $base . `$tabla31` SET $datos WHERE id_usuario=$id_usuario");
	
	/*------ ACTUALIZAR PARTIDOS $tabla32 ----*/
	$partidos='0';
	$datos_partidos="b1='$partidos',b2='$partidos',b3='$partidos',b4='$partidos',b5='$partidos',b6='$partidos',b7='$partidos',b8='$partidos',b9='$partidos',b10='$partidos'";
	mysqli_query($conexion, "UPDATE $base . `$tabla32` SET $datos_partidos WHERE id_usuario=$id_usuario");
		
	/*------ ACTUALIZAR FECHA $tabla33 ----*/
	$fecha='0';
	$datos_fecha="b1='$fecha',b2='$fecha',b3='$fecha',b4='$fecha',b5='$fecha',b6='$fecha',b7='$fecha',b8='$fecha',b9='$fecha',b10='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos_fecha WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
	$bono='bono.php?id='.$id_usuario.'';
	
	header ("Location: ".$bono);
}

if ($borrar=='BORRAR'){
	
	
		
	/*------ ACTUALIZAR FECHA $tabla33 ----*/
	
	//mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos_fecha WHERE id_usuario=$id_usuario") or die(mysqli_error());
	//mysqli_close();
	echo $POST['id_usuario'];
	$pagina=1;
	$bono='lista_bono.php?pagina='.$pagina;
	
	header ("Location: ".$bono);
	
	
}


if ($editar=='CAMBIAR'){
	
	//echo $editar." // ".$nombre." // ".$apellido." // ".$telefono." // ".$id_usuario;
	
	
	$datos="nombre='$nombre',apellido='$apellido',telefono='$telefono'";
	
	$sentencia="UPDATE $base . `$tabla31` SET $datos WHERE id_usuario=$id_usuario";
	
	$inserta=mysqli_query($conexion, $sentencia);	
	
	header ("Location: lista_bono.php");
	
	
}
	
?>