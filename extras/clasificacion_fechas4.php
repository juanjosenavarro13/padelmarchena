<?php
include("../conexion.php");
$alumnos='clasificacion.php';
session_start();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////  consulta1         ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////          ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=25";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){

$id_fecha25=$row->id;

}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha25==25){
	
$fecha25=$_POST['fecha25'];
$hora25=$_POST['hora25'];
////////////////////////////////////
$id=25;	
	
$datos="id_fecha='$id',fecha='$fecha25',hora='$hora25'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=25";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha25=$_POST['fecha25'];
		$hora25=$_POST['hora25'];
		
		$id=25;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha25','$hora25'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////consulta2///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=26";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){

$id_fecha26=$row->id;

}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha26==26){
	
$fecha26=$_POST['fecha26'];
$hora26=$_POST['hora26'];
////////////////////////////////////
$id=26;	
	
$datos="id_fecha='$id',fecha='$fecha26',hora='$hora26'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=26";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha26=$_POST['fecha26'];
		$hora26=$_POST['hora26'];
		
		$id=26;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha26','$hora26'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////consulta3//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=27";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){

$id_fecha27=$row->id;

}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha27==27){
	
$fecha27=$_POST['fecha27'];
$hora27=$_POST['hora27'];
////////////////////////////////////
$id=27;	
	
$datos="id_fecha='$id',fecha='$fecha27',hora='$hora27'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=27";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha27=$_POST['fecha27'];
		$hora27=$_POST['hora27'];
		
		$id=27;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha27','$hora27'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////consulta4/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=28";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){

$id_fecha28=$row->id;

}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha28==28){
	
$fecha28=$_POST['fecha28'];
$hora28=$_POST['hora28'];
////////////////////////////////////
$id=28;	
	
$datos="id_fecha='$id',fecha='$fecha28',hora='$hora28'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=28";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha28=$_POST['fecha28'];
		$hora28=$_POST['hora28'];
		
		$id=28;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha28','$hora28'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=29";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){

$id_fecha29=$row->id;

}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha29==29){
	
$fecha29=$_POST['fecha29'];
$hora29=$_POST['hora29'];
////////////////////////////////////
$id=29;	
	
$datos="id_fecha='$id',fecha='$fecha29',hora='$hora29'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=29";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha29=$_POST['fecha29'];
		$hora29=$_POST['hora29'];
		
		$id=29;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha29','$hora29'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=30";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){

$id_fecha30=$row->id;

}
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha30==30){
	
$fecha30=$_POST['fecha30'];
$hora30=$_POST['hora30'];
////////////////////////////////////
$id=30;	
	
$datos="id_fecha='$id',fecha='$fecha30',hora='$hora30'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=30";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha30=$_POST['fecha30'];
		$hora30=$_POST['hora30'];
		
		$id=30;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha30','$hora30'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}

	

	header ("Location: ".$alumnos);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha31==31){
	
$fecha31=$_POST['fecha31'];
$hora31=$_POST['hora31'];
////////////////////////////////////
$id=31;	
	
$datos="id_fecha='$id',fecha='$fecha31',hora='$hora31'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=31";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha31=$_POST['fecha31'];
		$hora31=$_POST['hora31'];
		
		$id=31;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha31','$hora31'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}

	

	header ("Location: ".$alumnos);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
if ($id_fecha32==32){
	
$fecha32=$_POST['fecha32'];
$hora32=$_POST['hora32'];
////////////////////////////////////
$id=32;	
	
$datos="id_fecha='$id',fecha='$fecha32',hora='$hora32'";

$sentencia="UPDATE $base . `$tabla19` SET $datos WHERE id_fecha=32";


$modifica=mysql_query($sentencia,$conexion);

}else{
	
		$fecha32=$_POST['fecha32'];
		$hora32=$_POST['hora32'];
		
		$id=32;		
		$campos="id_fecha,fecha,hora";
		$datos="'$id','$fecha32','$hora32'";
	
		$sentencia="INSERT INTO $tabla19 ($campos) VALUES ($datos) ";
	
		$inserta=mysql_query($sentencia,$conexion);
}

	

	header ("Location: ".$alumnos);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>