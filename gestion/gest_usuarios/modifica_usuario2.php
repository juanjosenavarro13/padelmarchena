<?php
include("../../conexion.php");
include ("../seguridad.php");
$id_usuario=$_POST['id_usuario'];
$nombre=strtoupper($_POST['nombre']);
$apellido1=strtoupper($_POST['apellido1']);
$apellido2=strtoupper($_POST['apellido2']);
$mail=$_POST['mail'];
$telefono1=$_POST['telefono1'];
$ano=$_POST['ano'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$dni=$_POST['dni'];
$fecha_nacimiento=$ano."-".$mes."-".$dia;
$diaalta=date("Y-m-d");
$horaalta=date("H:i:s");
$nota=$_POST['aviso'];
$nick=$_POST['fecha1'];;
$pag=$_POST['pag'];


$campos="nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', dni='$dni', mail='$mail', telefono1='$telefono1', telefono2='$telefono2', calle='$calle', numero='$numero', bloque='$bloque', puerta='$puerta', fecha_nacimiento='fecha_nacimiento'";

//echo $id_usuario."<br>";
$sentencia="UPDATE $base . `$tabla1` SET $campos WHERE $tabla1 . id_usuario=$id_usuario ";
//echo $sentencia."<br>";
$modifica=mysql_query($sentencia,$conexion);

header ("Location: $pag?id_usuario=$id_usuario&msj=1");


?>