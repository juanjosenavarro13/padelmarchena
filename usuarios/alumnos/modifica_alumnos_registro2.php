<?php
include("../../conexion.php");
include ("../seguridad.php");
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla16` WHERE id_alumno='$id_alumno' ";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
/////////////////////////////////////////////////////////////

$pagado_consulta=$row->pagado;

}
/////////////////////////////////////////////////////////////

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$telefono=$_POST['telefono'];

$pag=$_POST['pag'];

$pagado=$_POST['pagado'];

$id_alumno=$_POST['id_alumno'];

$fecha=$_POST['fecha'];

$mes=$_POST['mes'];

$n_cuenta=$_POST['n_cuenta'];
$n_cuenta2=$_POST['n_cuenta2'];
$n_cuenta3=$_POST['n_cuenta3'];
$n_cuenta4=$_POST['n_cuenta4'];

//$campos="nombre,apellido,telefono";

$datos="nombre='$nombre',apellido='$apellido',telefono='$telefono',pagado='$pagado',n_cuenta='$n_cuenta',n_cuenta2='$n_cuenta2',n_cuenta3='$n_cuenta3',n_cuenta4='$n_cuenta4',mes='$mes'";


$sentencia="UPDATE $base . `$tabla16` SET $datos WHERE id_alumno='$id_alumno' ";

$modifica=mysql_query($sentencia,$conexion);

header ("Location: $pag?id_alumno=$id_alumno&msj=1");


if ($pagado!=$pagado_consulta){
	
$datos2="nombre='$nombre',apellido='$apellido',telefono='$telefono',pagado='$pagado',n_cuenta='$n_cuenta',n_cuenta2='$n_cuenta2',n_cuenta3='$n_cuenta3',n_cuenta4='$n_cuenta4',fecha='$fecha',mes='$mes'";


$sentencia2="UPDATE $base . `$tabla16` SET $datos2 WHERE id_alumno='$id_alumno' ";

$modifica2=mysql_query($sentencia2,$conexion);

header ("Location: $pag?id_alumno=$id_alumno&msj=1");
}

?>