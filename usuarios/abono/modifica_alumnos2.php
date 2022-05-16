<?php
include("../../conexion.php");
include ("../seguridad.php");
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla24` WHERE id='$id' ";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
/////////////////////////////////////////////////////////////

$pagado_consulta=$row->precio1;

}
/////////////////////////////////////////////////////////////

$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$nombre3=$_POST['nombre3'];
$nombre4=$_POST['nombre4'];

$precio1=$_POST['precio1'];
$precio2=$_POST['precio2'];
$precio3=$_POST['precio3'];
$precio4=$_POST['precio4'];

$mes=$_POST['mes'];
$horario=$_POST['horario'];
$dia=$_POST['dia'];

$id12=$_POST['id12'];

$id=$_POST['id'];

$pag=$_POST['pag'];

$fecha=$_POST['fecha'];

$pista=$_POST['pista'];


//$campos="nombre,apellido,telefono";

$datos="dia='$dia',horario='$horario',nombre1='$nombre1',nombre2='$nombre2',nombre3='$nombre3',nombre4='$nombre4',precio1='$precio1',precio2='$precio2',precio3='$precio3',precio4='$precio4',mes='$mes',fecha='$fecha',pista='$pista'";


$sentencia="UPDATE $base . `$tabla24` SET $datos WHERE id='$id' ";

$modifica=mysql_query($sentencia,$conexion);

header ("Location: $pag?id=$id&msj=1");


if ($precio!=$pagado_consulta){
	
$datos2="dia='$dia',horario='$horario',nombre1='$nombre1',nombre2='$nombre2',nombre3='$nombre3',nombre4='$nombre4',precio1='$precio1',precio2='$precio2',precio3='$precio3',precio4='$precio4',mes='$mes',fecha='$fecha',pista='$pista'";

$sentencia2="UPDATE $base . `$tabla24` SET $datos2 WHERE id='$id' ";

$modifica2=mysql_query($sentencia2,$conexion);

header ("Location: $pag?id=$id&msj=1");
}

?>