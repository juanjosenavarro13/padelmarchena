<?php
include("../../conexion.php");
include ("../seguridad.php");
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla22` WHERE id='$id' ";
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

$n_cuenta=$_POST['n_cuenta'];
$n_cuenta2=$_POST['n_cuenta2'];
$n_cuenta3=$_POST['n_cuenta3'];
$n_cuenta4=$_POST['n_cuenta4'];

$debaja=$_POST['debaja'];

//echo $debaja;
//$campos="nombre,apellido,telefono";

$datos="debaja='$debaja'";


$sentencia="UPDATE $base . `$tabla22` SET $datos WHERE id='$id' ";

$modifica=mysqli_query($conexion, $sentencia);
header ("Location: $pag?id=$id&msj=1");


if ($pagado!=$pagado_consulta){
	
$datos2="debaja='$debaja'";

$sentencia2="UPDATE $base . `$tabla22` SET $datos2 WHERE id='$id' ";

$modifica2=mysqli_query($conexion, $sentencia2);
header ("Location: $pag?id=$id&msj=1");
}

?>