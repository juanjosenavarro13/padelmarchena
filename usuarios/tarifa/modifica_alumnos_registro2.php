<?php
include("../../conexion.php");
include ("../seguridad.php");
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla23` WHERE id='$id' ";
$resultado = mysqli_query($conexion, $ssql);
while ($row=mysqli_fetch_object($resultado)){
/////////////////////////////////////////////////////////////

$pagado_consulta=$row->pagado;

}
/////////////////////////////////////////////////////////////

$nombre=$_POST['nombre'];

$apellido=$_POST['apellido'];

$telefono=$_POST['telefono'];

$pag=$_POST['pag'];

$pagado=$_POST['pagado'];

$id=$_POST['id'];

$fecha=$_POST['fecha'];

$mes=$_POST['mes'];

//$campos="nombre,apellido,telefono";

$datos="nombre='$nombre',apellido='$apellido',telefono='$telefono',pagado='$pagado',mes='$mes'";


$sentencia="UPDATE $base . `$tabla23` SET $datos WHERE id='$id' ";

$modifica=mysqli_query($conexion, $sentencia);

header ("Location: $pag?id=$id&msj=1");


if ($pagado!=$pagado_consulta){
	
$datos2="nombre='$nombre',apellido='$apellido',telefono='$telefono',pagado='$pagado',fecha='$fecha',mes='$mes'";


$sentencia2="UPDATE $base . `$tabla23` SET $datos2 WHERE id='$id' ";

$modifica2=mysqli_query($conexion, $sentencia2);

header ("Location: $pag?id=$id&msj=1");
}

?>