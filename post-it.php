<?php
include("conexion.php");
$URL=$URL_CAPTION;
session_start();

$fecha_dia=date(d);
$fecha_mes=date(m);
$fecha_ano=date(y);
$hora=date("H:i");
$fecha=$fecha_dia."-".$fecha_mes."-".$fecha_ano."-".$hora;
$texto=$_POST["textarea"];
$URL_CAPTION=$_POST["URL_CAPTION"];

	$datos="texto='$texto'";
	mysqli_query($conexion, "UPDATE $base . `$tabla39` SET $datos WHERE id=1");

	


	$datos="texto='$texto'";
	mysqli_query($conexion, "INSERT INTO `$tabla51`(`id`, `texto`, `fecha`) VALUES ('','$texto','$fecha')");

	
	
	
	header ("Location: ".$URL_CAPTION);	
	
?>