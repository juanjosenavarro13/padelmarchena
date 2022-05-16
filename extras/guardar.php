<?php
include("../conexion.php");
$volver='reto_liga.php';
session_start();


/////////////////////////////////////////////////////////////
$ssql_consu = "select * from `$tabla40` WHERE id=01";
$resultado_consu = mysql_query($ssql_consu);
while ($row=mysql_fetch_object($resultado_consu)){

$id_consulta1=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu2 = "select * from `$tabla40` WHERE id=02";
$resultado_consu2 = mysql_query($ssql_consu2);
while ($row=mysql_fetch_object($resultado_consu2)){

$id_consulta2=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu3 = "select * from `$tabla40` WHERE id=03";
$resultado_consu3 = mysql_query($ssql_consu3);
while ($row=mysql_fetch_object($resultado_consu3)){

$id_consulta3=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu4 = "select * from `$tabla40` WHERE id=04";
$resultado_consu4 = mysql_query($ssql_consu4);
while ($row=mysql_fetch_object($resultado_consu4)){

$id_consulta4=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu5 = "select * from `$tabla40` WHERE id=05";
$resultado_consu5 = mysql_query($ssql_consu5);
while ($row=mysql_fetch_object($resultado_consu5)){

$id_consulta5=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu6 = "select * from `$tabla40` WHERE id=06";
$resultado_consu6 = mysql_query($ssql_consu6);
while ($row=mysql_fetch_object($resultado_consu6)){

$id_consulta6=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu7 = "select * from `$tabla40` WHERE id=07";
$resultado_consu7 = mysql_query($ssql_consu7);
while ($row=mysql_fetch_object($resultado_consu7)){

$id_consulta7=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu8 = "select * from `$tabla40` WHERE id=08";
$resultado_consu8 = mysql_query($ssql_consu8);
while ($row=mysql_fetch_object($resultado_consu8)){

$id_consulta8=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu9 = "select * from `$tabla40` WHERE id=09";
$resultado_consu9 = mysql_query($ssql_consu9);
while ($row=mysql_fetch_object($resultado_consu9)){

$id_consulta9=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu10 = "select * from `$tabla40` WHERE id=10";
$resultado_consu10 = mysql_query($ssql_consu10);
while ($row=mysql_fetch_object($resultado_consu10)){

$id_consulta10=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu11 = "select * from `$tabla40` WHERE id=11";
$resultado_consu11 = mysql_query($ssql_consu11);
while ($row=mysql_fetch_object($resultado_consu11)){

$id_consulta11=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu12 = "select * from `$tabla40` WHERE id=12";
$resultado_consu12 = mysql_query($ssql_consu12);
while ($row=mysql_fetch_object($resultado_consu12)){

$id_consulta12=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu13 = "select * from `$tabla40` WHERE id=13";
$resultado_consu13 = mysql_query($ssql_consu13);
while ($row=mysql_fetch_object($resultado_consu13)){

$id_consulta13=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu14 = "select * from `$tabla40` WHERE id=14";
$resultado_consu14 = mysql_query($ssql_consu14);
while ($row=mysql_fetch_object($resultado_consu14)){

$id_consulta14=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu15 = "select * from `$tabla40` WHERE id=15";
$resultado_consu15 = mysql_query($ssql_consu15);
while ($row=mysql_fetch_object($resultado_consu15)){

$id_consulta15=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu16 = "select * from `$tabla40` WHERE id=16";
$resultado_consu16 = mysql_query($ssql_consu16);
while ($row=mysql_fetch_object($resultado_consu16)){

$id_consulta16=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu17 = "select * from `$tabla40` WHERE id=17";
$resultado_consu17 = mysql_query($ssql_consu17);
while ($row=mysql_fetch_object($resultado_consu17)){

$id_consulta17=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu18 = "select * from `$tabla40` WHERE id=18";
$resultado_consu18 = mysql_query($ssql_consu18);
while ($row=mysql_fetch_object($resultado_consu18)){

$id_consulta18=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu19 = "select * from `$tabla40` WHERE id=19";
$resultado_consu19 = mysql_query($ssql_consu19);
while ($row=mysql_fetch_object($resultado_consu19)){

$id_consulta19=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu20 = "select * from `$tabla40` WHERE id=20";
$resultado_consu20 = mysql_query($ssql_consu20);
while ($row=mysql_fetch_object($resultado_consu20)){

$id_consulta20=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu21 = "select * from `$tabla40` WHERE id=21";
$resultado_consu21 = mysql_query($ssql_consu21);
while ($row=mysql_fetch_object($resultado_consu21)){

$id_consulta21=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu22 = "select * from `$tabla40` WHERE id=22";
$resultado_consu22 = mysql_query($ssql_consu22);
while ($row=mysql_fetch_object($resultado_consu22)){

$id_consulta22=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu23 = "select * from `$tabla40` WHERE id=23";
$resultado_consu23 = mysql_query($ssql_consu23);
while ($row=mysql_fetch_object($resultado_consu23)){

$id_consulta23=$row->id;

}
	

if ($id_consulta1==1){
	
$clas1=$_POST['clas1'];
$pareja1=$_POST['pareja1'];
$pj1=$_POST['pj1'];
$pg1=$_POST['pg1'];
$px_reto1=$_POST['px_reto1'];
$fecha1=$_POST['fecha1'];
////////////////////////////////////

$datos="pareja='$pareja1',pj='$pj1',pg='$pg1',px_reto='$px_reto1',fecha='$fecha1'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=01 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta2==2){
	
$clas2=$_POST['clas2'];
$pareja2=$_POST['pareja2'];
$pj2=$_POST['pj2'];
$pg2=$_POST['pg2'];
$px_reto2=$_POST['px_reto2'];
$fecha2=$_POST['fecha2'];
////////////////////////////////////

$datos="pareja='$pareja2',pj='$pj2',pg='$pg2',px_reto='$px_reto2',fecha='$fecha2'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=02 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta3==3){
	
$clas3=$_POST['clas3'];
$pareja3=$_POST['pareja3'];
$pj3=$_POST['pj3'];
$pg3=$_POST['pg3'];
$px_reto3=$_POST['px_reto3'];
$fecha3=$_POST['fecha3'];
////////////////////////////////////

$datos="pareja='$pareja3',pj='$pj3',pg='$pg3',px_reto='$px_reto3',fecha='$fecha3'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=03 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta4==4){
	
$clas4=$_POST['clas4'];
$pareja4=$_POST['pareja4'];
$pj4=$_POST['pj4'];
$pg4=$_POST['pg4'];
$px_reto4=$_POST['px_reto4'];
$fecha4=$_POST['fecha4'];
////////////////////////////////////

$datos="pareja='$pareja4',pj='$pj4',pg='$pg4',px_reto='$px_reto4',fecha='$fecha4'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=04 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta5==5){
	
$clas5=$_POST['clas5'];
$pareja5=$_POST['pareja5'];
$pj5=$_POST['pj5'];
$pg5=$_POST['pg5'];
$px_reto5=$_POST['px_reto5'];
$fecha5=$_POST['fecha5'];
////////////////////////////////////

$datos="pareja='$pareja5',pj='$pj5',pg='$pg5',px_reto='$px_reto5',fecha='$fecha5'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=05 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta6==6){
	
$clas6=$_POST['clas6'];
$pareja6=$_POST['pareja6'];
$pj6=$_POST['pj6'];
$pg6=$_POST['pg6'];
$px_reto6=$_POST['px_reto6'];
$fecha6=$_POST['fecha6'];
////////////////////////////////////

$datos="pareja='$pareja6',pj='$pj6',pg='$pg6',px_reto='$px_reto6',fecha='$fecha6'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=06 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta7==7){
	
$clas7=$_POST['clas7'];
$pareja7=$_POST['pareja7'];
$pj7=$_POST['pj7'];
$pg7=$_POST['pg7'];
$px_reto7=$_POST['px_reto7'];
$fecha7=$_POST['fecha7'];
////////////////////////////////////

$datos="pareja='$pareja7',pj='$pj7',pg='$pg7',px_reto='$px_reto7',fecha='$fecha7'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=07 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta8==8){
	
$clas8=$_POST['clas8'];
$pareja8=$_POST['pareja8'];
$pj8=$_POST['pj8'];
$pg8=$_POST['pg8'];
$px_reto8=$_POST['px_reto8'];
$fecha8=$_POST['fecha8'];
////////////////////////////////////

$datos="pareja='$pareja8',pj='$pj8',pg='$pg8',px_reto='$px_reto8',fecha='$fecha8'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=08 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta9==9){
	
$clas9=$_POST['clas9'];
$pareja9=$_POST['pareja9'];
$pj9=$_POST['pj9'];
$pg9=$_POST['pg9'];
$px_reto9=$_POST['px_reto9'];
$fecha9=$_POST['fecha9'];
////////////////////////////////////

$datos="pareja='$pareja9',pj='$pj9',pg='$pg9',px_reto='$px_reto9',fecha='$fecha9'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=09 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta10==10){
	
$clas10=$_POST['clas10'];
$pareja10=$_POST['pareja10'];
$pj10=$_POST['pj10'];
$pg10=$_POST['pg10'];
$px_reto10=$_POST['px_reto10'];
$fecha10=$_POST['fecha10'];
////////////////////////////////////

$datos="pareja='$pareja10',pj='$pj10',pg='$pg10',px_reto='$px_reto10',fecha='$fecha10'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=10 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta11==11){
	
$clas11=$_POST['clas11'];
$pareja11=$_POST['pareja11'];
$pj11=$_POST['pj11'];
$pg11=$_POST['pg11'];
$px_reto11=$_POST['px_reto11'];
$fecha11=$_POST['fecha11'];
////////////////////////////////////

$datos="pareja='$pareja11',pj='$pj11',pg='$pg11',px_reto='$px_reto11',fecha='$fecha11'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=11 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta12==12){
	
$clas12=$_POST['clas12'];
$pareja12=$_POST['pareja12'];
$pj12=$_POST['pj12'];
$pg12=$_POST['pg12'];
$px_reto12=$_POST['px_reto12'];
$fecha12=$_POST['fecha12'];
////////////////////////////////////

$datos="pareja='$pareja12',pj='$pj12',pg='$pg12',px_reto='$px_reto12',fecha='$fecha12'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=12 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta13==13){
	
$clas13=$_POST['clas13'];
$pareja13=$_POST['pareja13'];
$pj13=$_POST['pj13'];
$pg13=$_POST['pg13'];
$px_reto13=$_POST['px_reto13'];
$fecha13=$_POST['fecha13'];
////////////////////////////////////

$datos="pareja='$pareja13',pj='$pj13',pg='$pg13',px_reto='$px_reto13',fecha='$fecha13'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=13 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta14==14){
	
$clas14=$_POST['clas14'];
$pareja14=$_POST['pareja14'];
$pj14=$_POST['pj14'];
$pg14=$_POST['pg14'];
$px_reto14=$_POST['px_reto14'];
$fecha14=$_POST['fecha14'];
////////////////////////////////////

$datos="pareja='$pareja14',pj='$pj14',pg='$pg14',px_reto='$px_reto14',fecha='$fecha14'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=14 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta15==15){
	
$clas15=$_POST['clas15'];
$pareja15=$_POST['pareja15'];
$pj15=$_POST['pj15'];
$pg15=$_POST['pg15'];
$px_reto15=$_POST['px_reto15'];
$fecha15=$_POST['fecha15'];
////////////////////////////////////

$datos="pareja='$pareja15',pj='$pj15',pg='$pg15',px_reto='$px_reto15',fecha='$fecha15'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=15 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta16==16){
	
$clas16=$_POST['clas16'];
$pareja16=$_POST['pareja16'];
$pj16=$_POST['pj16'];
$pg16=$_POST['pg16'];
$px_reto16=$_POST['px_reto16'];
$fecha16=$_POST['fecha16'];
////////////////////////////////////

$datos="pareja='$pareja16',pj='$pj16',pg='$pg16',px_reto='$px_reto16',fecha='$fecha16'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=16 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta17==17){
	
$clas17=$_POST['clas17'];
$pareja17=$_POST['pareja17'];
$pj17=$_POST['pj17'];
$pg17=$_POST['pg17'];
$px_reto17=$_POST['px_reto17'];
$fecha17=$_POST['fecha17'];
////////////////////////////////////

$datos="pareja='$pareja17',pj='$pj17',pg='$pg17',px_reto='$px_reto17',fecha='$fecha17'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=17 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta18==18){
	
$clas18=$_POST['clas18'];
$pareja18=$_POST['pareja18'];
$pj18=$_POST['pj18'];
$pg18=$_POST['pg18'];
$px_reto18=$_POST['px_reto18'];
$fecha18=$_POST['fecha18'];
////////////////////////////////////

$datos="pareja='$pareja18',pj='$pj18',pg='$pg18',px_reto='$px_reto18',fecha='$fecha18'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=18 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta19==19){
	
$clas19=$_POST['clas19'];
$pareja19=$_POST['pareja19'];
$pj19=$_POST['pj19'];
$pg19=$_POST['pg19'];
$px_reto19=$_POST['px_reto19'];
$fecha19=$_POST['fecha19'];
////////////////////////////////////

$datos="pareja='$pareja19',pj='$pj19',pg='$pg19',px_reto='$px_reto19',fecha='$fecha19'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=19 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta20==20){
	
$clas20=$_POST['clas20'];
$pareja20=$_POST['pareja20'];
$pj20=$_POST['pj20'];
$pg20=$_POST['pg20'];
$px_reto20=$_POST['px_reto20'];
$fecha20=$_POST['fecha20'];
////////////////////////////////////

$datos="pareja='$pareja20',pj='$pj20',pg='$pg20',px_reto='$px_reto20',fecha='$fecha20'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=20 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta21==21){
	
$clas21=$_POST['clas21'];
$pareja21=$_POST['pareja21'];
$pj21=$_POST['pj21'];
$pg21=$_POST['pg21'];
$px_reto21=$_POST['px_reto21'];
$fecha21=$_POST['fecha21'];
////////////////////////////////////

$datos="pareja='$pareja21',pj='$pj21',pg='$pg21',px_reto='$px_reto21',fecha='$fecha21'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=21 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta22==22){
	
$clas22=$_POST['clas22'];
$pareja22=$_POST['pareja22'];
$pj22=$_POST['pj22'];
$pg22=$_POST['pg22'];
$px_reto22=$_POST['px_reto22'];
$fecha22=$_POST['fecha22'];
////////////////////////////////////

$datos="pareja='$pareja22',pj='$pj22',pg='$pg22',px_reto='$px_reto22',fecha='$fecha22'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=22 ";

$modifica=mysql_query($sentencia,$conexion);
}
if ($id_consulta23==23){
	
$clas23=$_POST['clas23'];
$pareja23=$_POST['pareja23'];
$pj23=$_POST['pj23'];
$pg23=$_POST['pg23'];
$px_reto23=$_POST['px_reto23'];
$fecha23=$_POST['fecha23'];
////////////////////////////////////

$datos="pareja='$pareja23',pj='$pj23',pg='$pg23',px_reto='$px_reto23',fecha='$fecha23'";

$sentencia="UPDATE $base . `$tabla40` SET $datos WHERE id=23 ";

$modifica=mysql_query($sentencia,$conexion);
}
	header ("Location: ".$volver);
?>