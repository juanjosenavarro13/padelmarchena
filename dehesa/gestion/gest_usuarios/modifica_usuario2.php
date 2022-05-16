<?php
include("../../conexion.php");
include ("../seguridad.php");
$id_usuario=$_POST['id_usuario'];
$nombre=strtoupper($_POST['nombre']);
$apellidos=strtoupper($_POST['apellidos']);
$mail=$_POST['mail'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];
$ano=$_POST['ano'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$dni=$_POST['dni'];
$fecha_nacimiento=$ano."-".$mes."-".$dia;
$diaalta=date("Y-m-d");
$horaalta=date("H:i:s");
$nota=$_POST['aviso'];
$nick=$_POST['fecha1'];
$pag=$_POST['pag'];
$calle=$_POST['calle'];
$poblacion=$_POST['poblacion'];
$provincia=$_POST['provincia'];
$nivel=$_POST['nivel'];
$privilegios=$_POST['privilegios'];

$campos="Nombre='$nombre', Apellidos='$apellidos', Nif='$dni', Email='$mail', Telefono='$telefono1', Telefono2='$telefono2', Direccion='$calle', Poblacion='$poblacion', Provincia='$provincia', FechaNacimiento='$fecha_nacimiento', Nivel='$nivel', Privilegios='$privilegios'";

//echo $id_usuario."<br>";
$sentencia="UPDATE $base . `$tabla11` SET $campos WHERE $tabla11 . Id=$id_usuario ";
//echo $sentencia."<br>";
$modifica=mysql_query($sentencia,$conexion);
//echo $sentencia;
header ("Location: $pag?id_usuario=$id_usuario&msj=1");


?>