<?php
include("../../conexion.php");
include ("../seguridad.php");
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla14` WHERE id_alumno='$id_alumno' ";
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

$n_cuenta=$_POST['n_cuenta'];
$n_cuenta2=$_POST['n_cuenta2'];
$n_cuenta3=$_POST['n_cuenta3'];
$n_cuenta4=$_POST['n_cuenta4'];

$debaja=$_POST['debaja'];

//echo $debaja;
//$campos="nombre,apellido,telefono";

$datos="debaja='$debaja'";


$sentencia="UPDATE $base . `$tabla14` SET $datos WHERE id_alumno='$id_alumno' ";

$modifica=mysql_query($sentencia,$conexion);
header ("Location: $pag?id_alumno=$id_alumno&msj=1");


if ($pagado!=$pagado_consulta){
	
$datos2="debaja='$debaja'";

$sentencia2="UPDATE $base . `$tabla14` SET $datos2 WHERE id_alumno='$id_alumno' ";

$modifica2=mysql_query($sentencia2,$conexion);
header ("Location: $pag?id_alumno=$id_alumno&msj=1");
}

?>