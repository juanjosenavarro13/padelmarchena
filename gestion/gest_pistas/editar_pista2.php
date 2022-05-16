<?php
include("../../conexion.php");
include ("../seguridad.php");
$id_pista=$_POST['id_pista'];
$bloque_horario=$_POST['bloque'];
$bloque_horario_fs=$_POST['bloque_fs'];
$nombre=$_POST['nombre_pista'];
$descripcion=$_POST['descripcion'];
$pag=$_POST['pag'];


	$campos="id_pista='$id_pista', nombre='$nombre', descripcion='$descripcion', bloque='$bloque_horario', bloque_fs='$bloque_horario_fs'";

	
$sentencia="UPDATE $base . `$tabla2` SET $campos WHERE $tabla2 . id_pista=$id_pista ";
//echo $sentencia;
$modifica=mysqli_query($conexion,$sentencia);

header ("Location: $pag?id_pista=$id_pista&msj=1");


?>