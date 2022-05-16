<?php
include("../conexion.php");
$alumnos='eliminatoria2categoria.php';
session_start();
/////////////////////////////////////////////////////////////
$ssql_consu = "select * from `$tabla46` WHERE id=1";
$resultado_consu = mysql_query($ssql_consu);
while ($row=mysql_fetch_object($resultado_consu)){

$id_consulta1=$row->id;

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 1       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta1==1){ /// si existe una id = 1 actuliza UPDATE
	
$uno=$_POST['uno'];
$dos=$_POST['dos'];
$tres=$_POST['tres'];
$cuatro=$_POST['cuatro'];
$cinco=$_POST['cinco'];
$seis=$_POST['seis'];
$siete=$_POST['siete'];
$ocho=$_POST['ocho'];
$nueve=$_POST['nueve'];
$diez=$_POST['diez'];
$once=$_POST['once'];
$doce=$_POST['doce'];
$trece=$_POST['trece'];
$catorce=$_POST['catorce'];
$quince=$_POST['quince'];
$dieciseis=$_POST['dieciseis'];
$diecisiete=$_POST['diecisiete'];
$dieciocho=$_POST['dieciocho'];
$diecinueve=$_POST['diecinueve'];
$veinte=$_POST['veinte'];
$veintiuno=$_POST['veintiuno'];
$veintidos=$_POST['veintidos'];
$veintitres=$_POST['veintitres'];
$veinticuatro=$_POST['veinticuatro'];
$veinticinco=$_POST['veinticinco'];
$veintiseis=$_POST['veintiseis'];
$veintisiete=$_POST['veintisiete'];
$veintiocho=$_POST['veintiocho'];
$veintinueve=$_POST['veintinueve'];
$treinta=$_POST['treinta'];
////////////////////////////////////
$id=1;
	
$datos2="id='$id',uno='$uno',dos='$dos',tres='$tres',cuatro='$cuatro',cinco='$cinco',seis='$seis',siete='$siete',ocho='$ocho',nueve='$nueve',diez='$diez',once='$once',doce='$doce',trece='$trece',catorce='$catorce',quince='$quince',dieciseis='$dieciseis',
diecisiete='$diecisiete',dieciocho='$dieciocho',diecinueve='$diecinueve',veinte='$veinte',veintiuno='$veintiuno',veintidos='$veintidos',veintitres='$veintitres',
veinticuatro='$veinticuatro',veinticinco='$veinticinco',veintiseis='$veintiseis',veintisiete='$veintisiete',veintiocho='$veintiocho',veintinueve='$veintinueve',
treinta='$treinta'";

$sentencia2="UPDATE $base . `$tabla46` SET $datos2 WHERE id=1"; //guarda donde id sea igual a 1

$modifica2=mysql_query($sentencia2,$conexion);

}else{ /// SINO CREA CAMPO NUEVO INSERT INTO 
		$uno=$_POST['uno'];
		$dos=$_POST['dos'];
		$tres=$_POST['tres'];
		$cuatro=$_POST['cuatro'];
		$cinco=$_POST['cinco'];
		$seis=$_POST['seis'];
		$siete=$_POST['siete'];
		$ocho=$_POST['ocho'];
		$nueve=$_POST['nueve'];
		$diez=$_POST['diez'];
		$once=$_POST['once'];
		$doce=$_POST['doce'];
		$trece=$_POST['trece'];
		$catorce=$_POST['catorce'];
		$quince=$_POST['quince'];
		$dieciseis=$_POST['dieciseis'];
		$diecisiete=$_POST['diecisiete'];
		$dieciocho=$_POST['dieciocho'];
		$diecinueve=$_POST['diecinueve'];
		$veinte=$_POST['veinte'];
		$veintiuno=$_POST['veintiuno'];
		$veintidos=$_POST['veintidos'];
		$veintitres=$_POST['veintitres'];
		$veinticuatro=$_POST['veinticuatro'];
		$veinticinco=$_POST['veinticinco'];
		$veintiseis=$_POST['veintiseis'];
		$veintisiete=$_POST['veintisiete'];
		$veintiocho=$_POST['veintiocho'];
		$veintinueve=$_POST['veintinueve'];
		$treinta=$_POST['treinta'];
		
	
		$id=1;	
		$campos="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis,diecisiete,dieciocho,diecinueve,veinte,veintiuno,
		veintidos,veintitres,veinticuatro,veinticinco,veintiseis,veintisiete,veintiocho,veintinueve,treinta";
		$datos="'$id','$uno','$dos','$tres','$cuatro','$cinco','$seis','$siete','$ocho','$nueve','$diez','$once','$doce','$trece','$catorce','$quince','$dieciseis',
		'$diecisiete','$dieciocho','$diecinueve','$veinte','$veintiuno','$veintidos','$veintitres','$veinticuatro','$veinticinco','$veintiseis','$veintisiete','$veintiocho',
		'$veintinueve','$treinta'";
	
		$sentencia="INSERT INTO $tabla46 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}


	header ("Location: ".$alumnos);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

?>