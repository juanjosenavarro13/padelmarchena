<?php
include("../conexion.php");
$alumnos='clasificacion.php';
session_start();
/////////////////////////////////////////////////////////////
$ssql_consu = "select * from `$tabla18` WHERE id=1";
$resultado_consu = mysql_query($ssql_consu);
while ($row=mysql_fetch_object($resultado_consu)){

$id_consulta1=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu2 = "select * from `$tabla18` WHERE id=2";
$resultado_consu2 = mysql_query($ssql_consu2);
while ($row=mysql_fetch_object($resultado_consu2)){

$id_consulta2=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu3 = "select * from `$tabla18` WHERE id=3";
$resultado_consu3 = mysql_query($ssql_consu3);
while ($row=mysql_fetch_object($resultado_consu3)){

$id_consulta3=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu4 = "select * from `$tabla18` WHERE id=4";
$resultado_consu4 = mysql_query($ssql_consu4);
while ($row=mysql_fetch_object($resultado_consu4)){

$id_consulta4=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu5 = "select * from `$tabla18` WHERE id=5";
$resultado_consu5 = mysql_query($ssql_consu5);
while ($row=mysql_fetch_object($resultado_consu5)){

$id_consulta5=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu6 = "select * from `$tabla18` WHERE id=6";
$resultado_consu6 = mysql_query($ssql_consu6);
while ($row=mysql_fetch_object($resultado_consu6)){

$id_consulta6=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu7 = "select * from `$tabla18` WHERE id=7";
$resultado_consu7 = mysql_query($ssql_consu7);
while ($row=mysql_fetch_object($resultado_consu7)){

$id_consulta7=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu8 = "select * from `$tabla18` WHERE id=8";
$resultado_consu8 = mysql_query($ssql_consu8);
while ($row=mysql_fetch_object($resultado_consu8)){

$id_consulta8=$row->id;

}
/////////////////////////////////////////////////////////////
$ssql_consu9 = "select * from `$tabla18` WHERE id=9";
$resultado_consu9 = mysql_query($ssql_consu9);
while ($row=mysql_fetch_object($resultado_consu9)){

$id_consulta9=$row->id;

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
$treintaiuno=$_POST['treintaiuno'];
$treintaidos=$_POST['treintaidos'];
$treintaitres=$_POST['treintaitres'];
$treintaicuatro=$_POST['treintaicuatro'];
$treintaicinco=$_POST['treintaicinco'];
$treintaiseis=$_POST['treintaiseis'];
$treintaisiete=$_POST['treintaisiete'];
$treintaiocho=$_POST['treintaiocho'];
$treintainueve=$_POST['treintainueve'];
$cuarenta=$_POST['cuarenta'];
$cuarentaiuno=$_POST['cuarentaiuno'];
$cuarentaidos=$_POST['cuarentaitres'];
$cuarentaicuatro=$_POST['cuarentaicuatro'];
$cuarentaicinco=$_POST['cuarentaicinco'];
$cuarentaiseis=$_POST['cuarentaiseis'];
$cuarentaisiete=$_POST['cuarentaisiete'];
$cuarentaiocho=$_POST['cuarentaiocho'];
$cuarentainueve=$_POST['cuarentainueve'];
$cincuenta=$_POST['cincuenta'];
$cincuentaiuno=$_POST['cincuentaiuno'];
$cincuentaidos=$_POST['cincuentaidos'];
////////////////////////////////////
$id=1;
	
$datos2="id='$id',uno='$uno',dos='$dos',tres='$tres',cuatro='$cuatro',cinco='$cinco',seis='$seis',siete='$siete',ocho='$ocho',nueve='$nueve',diez='$diez',once='$once',doce='$doce'
,trece='$trece',catorce='$catorce',quince='$quince',dieciseis='$dieciseis',diecisiete='$diecisiete',dieciocho='$dieciocho',diecinueve='$diecinueve'
,veinte='$veinte',veintiuno='$veintiuno',veintidos='$veintidos',veintitres='$veintitres',veinticuatro='$veinticuatro', veinticinco='$veinticinco', veintiseis='$veintiseis', veintisiete='$veintisiete',
veintiocho='$veintiocho', veintinueve='$veintinueve', treinta='$treinta', treintaiuno='$treintaiuno', treintaidos='$treintaidos', treintaitres='$treintaitres', treintaicuatro='$treintaicuatro',
treintaicinco='$treintaicinco', treintaiseis='$treintaiseis', treintaisiete='$treintaisiete', treintaiocho='$treintaiocho', treintainueve='$treintainueve', cuarenta='$cuarenta', cuarentaiuno='$cuarentaiuno',
cuarentaidos='$cuarentaidos', cuarentaitres='$cuarentaitres', cuarentaicuatro='$cuarentaicuatro', cuarentaicinco='$cuarentaicinco, cuarentaiseis='$cuarentaiseis', cuarentaisiete='$cuarentaisiete',
cuarentaiocho='$cuarentaiocho', cuarentainueve='$cuarentainueve', cincuenta='$cincuenta', ciencuentaiuno='$cincuentaiuno', cincuentaidos='$cincuentaidos'";

$sentencia2="UPDATE $base . `$tabla18` SET $datos2 WHERE id=1"; //guarda donde id sea igual a 1

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
$treintaiuno=$_POST['treintaiuno'];
$treintaidos=$_POST['treintaidos'];
$treintaitres=$_POST['treintaitres'];
$treintaicuatro=$_POST['treintaicuatro'];
$treintaicinco=$_POST['treintaicinco'];
$treintaiseis=$_POST['treintaiseis'];
$treintaisiete=$_POST['treintaisiete'];
$treintaiocho=$_POST['treintaiocho'];
$treintainueve=$_POST['treintainueve'];
$cuarenta=$_POST['cuarenta'];
$cuarentaiuno=$_POST['cuarentaiuno'];
$cuarentaidos=$_POST['cuarentaitres'];
$cuarentaicuatro=$_POST['cuarentaicuatro'];
$cuarentaicinco=$_POST['cuarentaicinco'];
$cuarentaiseis=$_POST['cuarentaiseis'];
$cuarentaisiete=$_POST['cuarentaisiete'];
$cuarentaiocho=$_POST['cuarentaiocho'];
$cuarentainueve=$_POST['cuarentainueve'];
$cincuenta=$_POST['cincuenta'];
$cincuentaiuno=$_POST['cincuentaiuno'];
$cincuentaidos=$_POST['cincuentaidos'];
	
		$id=1;	
		$campos="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis,diecisiete,dieciocho,diecinueve,veinte,veintiuno,veintidos,veintitres,veinticuatro,
		veinticinco, veintiseis, veintisiete, veintiocho, veintinueve, treinta, treintaiuno, treintaidos, treintaitres, treintaicuatro, treintaicinco, treintaiseis, treintaisiete, treintaiocho,
		treintainueve, cuarenta, cuarentaiuno, cuarentaidos, cuarentaitres, cuarentaicuatro, cuarentaicinco, cuarentaiseis, cuarentaisiete, cuarentaiocho, cuarentainueve, cincuente, cincuenteiuno, cincuentaidos";
		$datos="'$id','$uno','$dos','$tres','$cuatro','$cinco','$seis','$siete','$ocho','$nueve','$diez','$once','$doce','$trece','$catorce','$quince','$dieciseis','$diecisiete','$dieciocho','$diecinueve','$veinte','$veintiuno','$veintidos','$veintitres','$veinticuatro', '$veinticinco', '$veintiseis', '$veintisiete',
		'$veintiocho', '$veintinueve', '$treinta', '$treintaiuno', '$treintaidos', '$treintaitres','$treintaicuatro', '$treintaicinco', '$treintaiseis', '$treintaisiete', '$treintaiocho', '$treintainueve','$cuarenta', '$cuarentaiuno',
		'$cuarentaidos', '$cuarentaitres', '$cuarentaicuatro', '$cuarentaicinco, '$cuarentaiseis', '$cuarentaisiete', '$cuarentaiocho', '$cuarentainueve', '$cincuenta', '$cincuentaiuno', '$cincuentaidos'";
	
		$sentencia="INSERT INTO $tabla18 ($campos) VALUES ($datos)  ";
	
		$inserta=mysql_query($sentencia,$conexion);
		
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 2       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta2==2){
	
$uno2=$_POST['uno2'];
$dos2=$_POST['dos2'];
$tres2=$_POST['tres2'];
$cuatro2=$_POST['cuatro2'];
$cinco2=$_POST['cinco2'];
$seis2=$_POST['seis2'];
$siete2=$_POST['siete2'];
$ocho2=$_POST['ocho2'];
$nueve2=$_POST['nueve2'];
$diez2=$_POST['diez2'];
$once2=$_POST['once2'];
$doce2=$_POST['doce2'];
$trece2=$_POST['trece2'];
$catorce2=$_POST['catorce2'];
$quince2=$_POST['quince2'];
$dieciseis2=$_POST['dieciseis2'];
$diecisiete2=$_POST['diecisiete2'];
$dieciocho2=$_POST['dieciocho2'];
$diecinueve2=$_POST['diecinueve2'];
$veinte2=$_POST['veinte2'];
$veintiuno2=$_POST['veintiuno2'];
$veintidos2=$_POST['veintidos2'];
$veintitres2=$_POST['veintitres2'];
$veinticuatro2=$_POST['veinticuatro2'];
$veinticinco2=$_POST['veinticinco2'];
$veintiseis2=$_POST['veintiseis2'];
$veintisiete2=$_POST['veintisiete2'];
$veintiocho2=$_POST['veintiocho2'];
$veintinueve2=$_POST['veintinueve2'];
$treinta2=$_POST['treinta2'];
$treintaiuno2=$_POST['treintaiuno2'];
$treintaidos2=$_POST['treintaidos2'];
$treintaitres2=$_POST['treintaitres2'];
$treintaicuatro2=$_POST['treintaicuatro2'];
$treintaicinco2=$_POST['treintaicinco2'];
$treintaiseis2=$_POST['treintaiseis2'];
$treintaisiete2=$_POST['treintaisiete2'];
$treintaiocho2=$_POST['treintaiocho2'];
$treintainueve2=$_POST['treintainueve2'];
$cuarenta2=$_POST['cuarenta2'];
$cuarentaiuno2=$_POST['cuarentaiuno2'];
$cuarentaidos2=$_POST['cuarentaitres2'];
$cuarentaicuatro2=$_POST['cuarentaicuatro2'];
$cuarentaicinco2=$_POST['cuarentaicinco2'];
$cuarentaiseis2=$_POST['cuarentaiseis2'];
$cuarentaisiete2=$_POST['cuarentaisiete2'];
$cuarentaiocho2=$_POST['cuarentaiocho2'];
$cuarentainueve2=$_POST['cuarentainueve2'];
$cincuenta2=$_POST['cincuenta2'];
$cincuentaiuno2=$_POST['cincuentaiuno2'];
$cincuentaidos2=$_POST['cincuentaidos2'];
////////////////////////////////////
$id2=2;	
	
$datos3="id='$id2',uno='$uno2',dos='$dos2',tres='$tres2',cuatro='$cuatro2',cinco='$cinco2',seis='$seis2',siete='$siete2',ocho='$ocho2',
nueve='$nueve2',diez='$diez2',once='$once2',doce='$doce2',trece='$trece2',catorce='$catorce2',quince='$quince2',dieciseis='$dieciseis2',
diecisiete='$diecisiete2',dieciocho='$dieciocho2',diecinueve='$diecinueve2',veinte='$veinte2',veintiuno='$veintiuno2',veintidos='$veintidos2',
veintitres='$veintitres2',veinticuatro='$veinticuatro2' veinticinco='$veinticinco2', veintiseis='$veintiseis2', veintisiete='$veintisiete2',
veintiocho='$veintiocho2', veintinueve='$veintinueve2', treinta='$treinta2', treintaiuno='$treintaiuno2', treintaidos='$treintaidos2', treintaitres='$treintaitres2',
 treintaicuatro='$treintaicuatro2',treintaicinco='$treintaicinco2', treintaiseis='$treintaiseis2', treintaisiete='$treintaisiete2', treintaiocho='$treintaiocho2',
 treintainueve='$treintainueve2', cuarenta='$cuarenta2', cuarentaiuno='$cuarentaiuno2',cuarentaidos='$cuarentaidos2', cuarentaitres='$cuarentaitres2',
 cuarentaicuatro='$cuarentaicuatro2', cuarentaicinco='$cuarentaicinco2, cuarentaiseis='$cuarentaiseis2', cuarentaisiete='$cuarentaisiete2',
cuarentaiocho='$cuarentaiocho2', cuarentainueve='$cuarentainueve2', cincuenta='$cincuenta2', ciencuentaiuno='$cincuentaiuno2', cincuentaidos='$cincuentaidos2'";

$sentencia3="UPDATE $base . `$tabla18` SET $datos3 WHERE id=2 ";


$modifica3=mysql_query($sentencia3,$conexion);

}else{
		$uno2=$_POST['uno2'];
		$dos2=$_POST['dos2'];
		$tres2=$_POST['tres2'];
		$cuatro2=$_POST['cuatro2'];
		$cinco2=$_POST['cinco2'];
		$seis2=$_POST['seis2'];
		$siete2=$_POST['siete2'];
		$ocho2=$_POST['ocho2'];
		$nueve2=$_POST['nueve2'];
		$diez2=$_POST['diez2'];
		$once2=$_POST['once2'];
		$doce2=$_POST['doce2'];
		$trece2=$_POST['trece2'];
		$catorce2=$_POST['catorce2'];
		$quince2=$_POST['quince2'];
		$dieciseis2=$_POST['dieciseis2'];
		$diecisiete2=$_POST['diecisiete2'];
		$dieciocho2=$_POST['dieciocho2'];
		$diecinueve2=$_POST['diecinueve2'];
		$veinte2=$_POST['veinte2'];
		$veintiuno2=$_POST['veintiuno2'];
		$veintidos2=$_POST['veintidos2'];
		$veintitres2=$_POST['veintitres2'];
		$veinticuatro2=$_POST['veinticuatro2'];
		$veinticinco2=$_POST['veinticinco2'];
		$veintiseis2=$_POST['veintiseis2'];
		$veintisiete2=$_POST['veintisiete2'];
		$veintiocho2=$_POST['veintiocho2'];
		$veintinueve2=$_POST['veintinueve2'];
		$treinta2=$_POST['treinta2'];
$treintaiuno2=$_POST['treintaiuno2'];
$treintaidos2=$_POST['treintaidos2'];
$treintaitres2=$_POST['treintaitres2'];
$treintaicuatro2=$_POST['treintaicuatro2'];
$treintaicinco2=$_POST['treintaicinco2'];
$treintaiseis2=$_POST['treintaiseis2'];
$treintaisiete2=$_POST['treintaisiete2'];
$treintaiocho2=$_POST['treintaiocho2'];
$treintainueve2=$_POST['treintainueve2'];
$cuarenta2=$_POST['cuarenta2'];
$cuarentaiuno2=$_POST['cuarentaiuno2'];
$cuarentaidos2=$_POST['cuarentaitres2'];
$cuarentaicuatro2=$_POST['cuarentaicuatro2'];
$cuarentaicinco2=$_POST['cuarentaicinco2'];
$cuarentaiseis2=$_POST['cuarentaiseis2'];
$cuarentaisiete2=$_POST['cuarentaisiete2'];
$cuarentaiocho2=$_POST['cuarentaiocho2'];
$cuarentainueve2=$_POST['cuarentainueve2'];
$cincuenta2=$_POST['cincuenta2'];
$cincuentaiuno2=$_POST['cincuentaiuno2'];
$cincuentaidos2=$_POST['cincuentaidos2'];
		
		$id2=2;		
		$campos2="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis,diecisiete,dieciocho,diecinueve,veinte,veintiuno,veintidos,veintitres,veinticuatro, 
		veinticinco, veintiseis, veintisiete, veintiocho, veintinueve, treinta, treintaiuno, treintaidos, treintaitres, treintaicuatro, treintaicinco, treintaiseis, treintaisiete, treintaiocho,
		treintainueve, cuarenta, cuarentaiuno, cuarentaidos, cuarentaitres, cuarentaicuatro, cuarentaicinco, cuarentaiseis, cuarentaisiete, cuarentaiocho, cuarentainueve, cincuente, cincuenteiuno,
		cincuentaidos";
		$datos2="'$id2','$uno2','$dos2','$tres2','$cuatro2','$cinco2','$seis2','$siete2','$ocho2','$nueve2','$diez2','$once2','$doce2','$trece2','$catorce2','$quince2','$dieciseis2''$diecisiete','$dieciocho','$diecinueve','$veinte','$veintiuno','$veintidos','$veintitres','$veinticuatro'";
	
		$sentencia2="INSERT INTO $tabla18 ($campos2) VALUES ($datos2) ";
	
		$inserta2=mysql_query($sentencia2,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 3       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta3==3){
	
$uno3=$_POST['uno3'];
$dos3=$_POST['dos3'];
$tres3=$_POST['tres3'];
$cuatro3=$_POST['cuatro3'];
$cinco3=$_POST['cinco3'];
$seis3=$_POST['seis3'];
$siete3=$_POST['siete3'];
$ocho3=$_POST['ocho3'];
$nueve3=$_POST['nueve3'];
$diez3=$_POST['diez3'];
$once3=$_POST['once3'];
$doce3=$_POST['doce3'];
////////////////////////////////////
$id3=3;	
	
$datos3="id='$id3',uno='$uno3',dos='$dos3',tres='$tres3',cuatro='$cuatro3',cinco='$cinco3',seis='$seis3',siete='$siete3',ocho='$ocho3',nueve='$nueve3',diez='$diez3',once='$once3',doce='$doce3'";

$sentencia3="UPDATE $base . `$tabla18` SET $datos3 WHERE id=3 ";


$modifica3=mysql_query($sentencia3,$conexion);

}else{
		$uno3=$_POST['uno3'];
		$dos3=$_POST['dos3'];
		$tres3=$_POST['tres3'];
		$cuatro3=$_POST['cuatro3'];
		$cinco3=$_POST['cinco3'];
		$seis3=$_POST['seis3'];
		$siete3=$_POST['siete3'];
		$ocho3=$_POST['ocho3'];
		$nueve3=$_POST['nueve3'];
		$diez3=$_POST['diez3'];
		$once3=$_POST['once3'];
		$doce3=$_POST['doce3'];
		
		
		$id3=3;		
		$campos3="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce";
		$datos3="'$id3','$uno3','$dos3','$tres3','$cuatro3','$cinco3','$seis3','$siete3','$ocho3','$nueve3','$diez3','$once3','$doce3'";
	
		$sentencia3="INSERT INTO $tabla18 ($campos3) VALUES ($datos3) ";
	
		$inserta3=mysql_query($sentencia3,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 4       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta4==4){
	
$uno4=$_POST['uno4'];
$dos4=$_POST['dos4'];
$tres4=$_POST['tres4'];
$cuatro4=$_POST['cuatro4'];
$cinco4=$_POST['cinco4'];
$seis4=$_POST['seis4'];
$siete4=$_POST['siete4'];
$ocho4=$_POST['ocho4'];
$nueve4=$_POST['nueve4'];
$diez4=$_POST['diez4'];
$once4=$_POST['once4'];
$doce4=$_POST['doce4'];

////////////////////////////////////
$id4=4;	
	
$datos4="id='$id4',uno='$uno4',dos='$dos4',tres='$tres4',cuatro='$cuatro4',cinco='$cinco4',seis='$seis4',siete='$siete4',ocho='$ocho4',nueve='$nueve4',diez='$diez4',once='$once4',doce='$doce4'";

$sentencia4="UPDATE $base . `$tabla18` SET $datos4 WHERE id=4 ";


$modifica4=mysql_query($sentencia4,$conexion);

}else{
		$uno4=$_POST['uno4'];
		$dos4=$_POST['dos4'];
		$tres4=$_POST['tres4'];
		$cuatro4=$_POST['cuatro4'];
		$cinco4=$_POST['cinco4'];
		$seis4=$_POST['seis4'];
		$siete4=$_POST['siete4'];
		$ocho4=$_POST['ocho4'];
		$nueve4=$_POST['nueve4'];
		$diez4=$_POST['diez4'];
		$once4=$_POST['once4'];
		$doce4=$_POST['doce4'];
		
		
		$id4=4;		
		$campos4="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce";
		$datos4="'$id4','$uno4','$dos4','$tres4','$cuatro4','$cinco4','$seis4','$siete4','$ocho4','$nueve4','$diez4','$once4','$doce4'";
	
		$sentencia4="INSERT INTO $tabla18 ($campos4) VALUES ($datos4) ";
	
		$inserta4=mysql_query($sentencia4,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 5       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta5==5){
	
$uno5=$_POST['uno5'];
$dos5=$_POST['dos5'];
$tres5=$_POST['tres5'];
$cuatro5=$_POST['cuatro5'];
$cinco5=$_POST['cinco5'];
$seis5=$_POST['seis5'];
$siete5=$_POST['siete5'];
$ocho5=$_POST['ocho5'];
$nueve5=$_POST['nueve5'];
$diez5=$_POST['diez5'];
$once5=$_POST['once5'];
$doce5=$_POST['doce5'];
$trece5=$_POST['trece5'];
$catorce5=$_POST['catorce5'];
$quince5=$_POST['quince5'];
$dieciseis5=$_POST['dieciseis5'];
////////////////////////////////////
$id5=5;	
	
$datos5="id='$id5',uno='$uno5',dos='$dos5',tres='$tres5',cuatro='$cuatro5',cinco='$cinco5',seis='$seis5',siete='$siete5',ocho='$ocho5',nueve='$nueve5',diez='$diez5',once='$once5',doce='$doce5',trece='$trece5',catorce='$catorce5',quince='$quince5',dieciseis='$dieciseis5'";

$sentencia5="UPDATE $base . `$tabla18` SET $datos5 WHERE id=5 ";


$modifica5=mysql_query($sentencia5,$conexion);

}else{
		$uno5=$_POST['uno5'];
		$dos5=$_POST['dos5'];
		$tres5=$_POST['tres5'];
		$cuatro5=$_POST['cuatro5'];
		$cinco5=$_POST['cinco5'];
		$seis5=$_POST['seis5'];
		$siete5=$_POST['siete5'];
		$ocho5=$_POST['ocho5'];
		$nueve5=$_POST['nueve5'];
		$diez5=$_POST['diez5'];
		$once5=$_POST['once5'];
		$doce5=$_POST['doce5'];
		$trece5=$_POST['trece5'];
		$catorce5=$_POST['catorce5'];
		$quince5=$_POST['quince5'];
		$dieciseis5=$_POST['dieciseis5'];
		
		$id5=5;		
		$campos5="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis";
		$datos5="'$id5','$uno5','$dos5','$tres5','$cuatro5','$cinco5','$seis5','$siete5','$ocho5','$nueve5','$diez5','$once5','$doce5','$trece5','$catorce5','$quince5','$dieciseis5'";
	
		$sentencia5="INSERT INTO $tabla18 ($campos5) VALUES ($datos5) ";
	
		$inserta5=mysql_query($sentencia5,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 6       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta6==6){
	
$uno6=$_POST['uno6'];
$dos6=$_POST['dos6'];
$tres6=$_POST['tres6'];
$cuatro6=$_POST['cuatro6'];
$cinco6=$_POST['cinco6'];
$seis6=$_POST['seis6'];
$siete6=$_POST['siete6'];
$ocho6=$_POST['ocho6'];
$nueve6=$_POST['nueve6'];
$diez6=$_POST['diez6'];
$once6=$_POST['once6'];
$doce6=$_POST['doce6'];
$trece6=$_POST['trece6'];
$catorce6=$_POST['catorce6'];
$quince6=$_POST['quince6'];
$dieciseis6=$_POST['dieciseis6'];
////////////////////////////////////
$id6=6;	
	
$datos6="id='$id6',uno='$uno6',dos='$dos6',tres='$tres6',cuatro='$cuatro6',cinco='$cinco6',seis='$seis6',siete='$siete6',ocho='$ocho6',nueve='$nueve6',diez='$diez6',once='$once6',doce='$doce6',trece='$trece6',catorce='$catorce6',quince='$quince6',dieciseis='$dieciseis6'";

$sentencia6="UPDATE $base . `$tabla18` SET $datos6 WHERE id=6 ";


$modifica6=mysql_query($sentencia6,$conexion);

}else{
		$uno6=$_POST['uno6'];
		$dos6=$_POST['dos6'];
		$tres6=$_POST['tres6'];
		$cuatro6=$_POST['cuatro6'];
		$cinco6=$_POST['cinco6'];
		$seis6=$_POST['seis6'];
		$siete6=$_POST['siete6'];
		$ocho6=$_POST['ocho6'];
		$nueve6=$_POST['nueve6'];
		$diez6=$_POST['diez6'];
		$once6=$_POST['once6'];
		$doce6=$_POST['doce6'];
		$trece6=$_POST['trece6'];
		$catorce6=$_POST['catorce6'];
		$quince6=$_POST['quince6'];
		$dieciseis6=$_POST['dieciseis6'];
		
		$id6=6;		
		$campos6="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis";
		$datos6="'$id6','$uno6','$dos6','$tres6','$cuatro6','$cinco6','$seis6','$siete6','$ocho6','$nueve6','$diez6','$once6','$doce6','$trece6','$catorce6','$quince6','$dieciseis6'";
	
		$sentencia6="INSERT INTO $tabla18 ($campos6) VALUES ($datos6) ";
	
		$inserta6=mysql_query($sentencia6,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 7       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta7==7){
	
$uno7=$_POST['uno7'];
$dos7=$_POST['dos7'];
$tres7=$_POST['tres7'];
$cuatro7=$_POST['cuatro7'];
$cinco7=$_POST['cinco7'];
$seis7=$_POST['seis7'];
$siete7=$_POST['siete7'];
$ocho7=$_POST['ocho7'];
$nueve7=$_POST['nueve7'];
$diez7=$_POST['diez7'];
$once7=$_POST['once7'];
$doce7=$_POST['doce7'];
$trece7=$_POST['trece7'];
$catorce7=$_POST['catorce7'];
$quince7=$_POST['quince7'];
$dieciseis7=$_POST['dieciseis7'];
////////////////////////////////////
$id7=7;	
	
$datos7="id='$id7',uno='$uno7',dos='$dos7',tres='$tres7',cuatro='$cuatro7',cinco='$cinco7',seis='$seis7',siete='$siete7',ocho='$ocho7',nueve='$nueve7',diez='$diez7',once='$once7',doce='$doce7',trece='$trece7',catorce='$catorce7',quince='$quince7',dieciseis='$dieciseis7'";

$sentencia7="UPDATE $base . `$tabla18` SET $datos7 WHERE id=7 ";


$modifica7=mysql_query($sentencia7,$conexion);

}else{
		$uno7=$_POST['uno7'];
		$dos7=$_POST['dos7'];
		$tres7=$_POST['tres7'];
		$cuatro7=$_POST['cuatro7'];
		$cinco7=$_POST['cinco7'];
		$seis7=$_POST['seis7'];
		$siete7=$_POST['siete7'];
		$ocho7=$_POST['ocho7'];
		$nueve7=$_POST['nueve7'];
		$diez7=$_POST['diez7'];
		$once7=$_POST['once7'];
		$doce7=$_POST['doce7'];
		$trece7=$_POST['trece7'];
		$catorce7=$_POST['catorce7'];
		$quince7=$_POST['quince7'];
		$dieciseis7=$_POST['dieciseis7'];
		
		$id7=7;		
		$campos7="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis";
		$datos7="'$id7','$uno7','$dos7','$tres7','$cuatro7','$cinco7','$seis7','$siete7','$ocho7','$nueve7','$diez7','$once7','$doce7','$trece7','$catorce7','$quince7','$dieciseis7'";
	
		$sentencia7="INSERT INTO $tabla18 ($campos7) VALUES ($datos7) ";
	
		$inserta7=mysql_query($sentencia7,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 8       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta8==8){
	
$uno8=$_POST['uno8'];
$dos8=$_POST['dos8'];
$tres8=$_POST['tres8'];
$cuatro8=$_POST['cuatro8'];
$cinco8=$_POST['cinco8'];
$seis8=$_POST['seis8'];
$siete8=$_POST['siete8'];
$ocho8=$_POST['ocho8'];
$nueve8=$_POST['nueve8'];
$diez8=$_POST['diez8'];
$once8=$_POST['once8'];
$doce8=$_POST['doce8'];
$trece8=$_POST['trece8'];
$catorce8=$_POST['catorce8'];
$quince8=$_POST['quince8'];
$dieciseis8=$_POST['dieciseis8'];
////////////////////////////////////
$id8=8;	
	
$datos8="id='$id8',uno='$uno8',dos='$dos8',tres='$tres8',cuatro='$cuatro8',cinco='$cinco8',seis='$seis8',siete='$siete8',ocho='$ocho8',nueve='$nueve8',diez='$diez8',once='$once8',doce='$doce8',trece='$trece8',catorce='$catorce8',quince='$quince8',dieciseis='$dieciseis8'";

$sentencia8="UPDATE $base . `$tabla18` SET $datos8 WHERE id=8 ";


$modifica8=mysql_query($sentencia8,$conexion);

}else{
		$uno8=$_POST['uno8'];
		$dos8=$_POST['dos8'];
		$tres8=$_POST['tres8'];
		$cuatro8=$_POST['cuatro8'];
		$cinco8=$_POST['cinco8'];
		$seis8=$_POST['seis8'];
		$siete8=$_POST['siete8'];
		$ocho8=$_POST['ocho8'];
		$nueve8=$_POST['nueve8'];
		$diez8=$_POST['diez8'];
		$once8=$_POST['once8'];
		$doce8=$_POST['doce8'];
		$trece8=$_POST['trece8'];
		$catorce8=$_POST['catorce8'];
		$quince8=$_POST['quince8'];
		$dieciseis8=$_POST['dieciseis8'];
		
		$id8=8;		
		$campos8="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis";
		$datos8="'$id8','$uno8','$dos8','$tres8','$cuatro8','$cinco8','$seis8','$siete8','$ocho8','$nueve8','$diez8','$once8','$doce8','$trece8','$catorce8','$quince8','$dieciseis8'";
	
		$sentencia8="INSERT INTO $tabla18 ($campos8) VALUES ($datos8) ";
	
		$inserta8=mysql_query($sentencia8,$conexion);
	

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////     CONSULTA 9       ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($id_consulta9==9){
	
$uno9=$_POST['uno9'];
$dos9=$_POST['dos9'];
$tres9=$_POST['tres9'];
$cuatro9=$_POST['cuatro9'];
$cinco9=$_POST['cinco9'];
$seis9=$_POST['seis9'];
$siete9=$_POST['siete9'];
$ocho9=$_POST['ocho9'];
$nueve9=$_POST['nueve9'];
$diez9=$_POST['diez9'];
$once9=$_POST['once9'];
$doce9=$_POST['doce9'];
$trece9=$_POST['trece9'];
$catorce9=$_POST['catorce9'];
$quince9=$_POST['quince9'];
$dieciseis9=$_POST['dieciseis9'];
////////////////////////////////////
$id9=9;	
	
$datos9="id='$id9',uno='$uno9',dos='$dos9',tres='$tres9',cuatro='$cuatro9',cinco='$cinco9',seis='$seis9',siete='$siete9',ocho='$ocho9',nueve='$nueve9',diez='$diez9',once='$once9',doce='$doce9',trece='$trece9',catorce='$catorce9',quince='$quince9',dieciseis='$dieciseis9'";

$sentencia9="UPDATE $base . `$tabla18` SET $datos9 WHERE id=9 ";


$modifica9=mysql_query($sentencia9,$conexion);

}else{
		$uno9=$_POST['uno9'];
		$dos9=$_POST['dos9'];
		$tres9=$_POST['tres9'];
		$cuatro9=$_POST['cuatro9'];
		$cinco9=$_POST['cinco9'];
		$seis9=$_POST['seis9'];
		$siete9=$_POST['siete9'];
		$ocho9=$_POST['ocho9'];
		$nueve9=$_POST['nueve9'];
		$diez9=$_POST['diez9'];
		$once9=$_POST['once9'];
		$doce9=$_POST['doce9'];
		$trece9=$_POST['trece9'];
		$catorce9=$_POST['catorce9'];
		$quince9=$_POST['quince9'];
		$dieciseis9=$_POST['dieciseis9'];
		
		$id9=9;		
		$campos9="id,uno,dos,tres,cuatro,cinco,seis,siete,ocho,nueve,diez,once,doce,trece,catorce,quince,dieciseis";
		$datos9="'$id9','$uno9','$dos9','$tres9','$cuatro9','$cinco9','$seis9','$siete9','$ocho9','$nueve9','$diez9','$once9','$doce9','$trece9','$catorce9','$quince9','$dieciseis9'";
	
		$sentencia9="INSERT INTO $tabla18 ($campos9) VALUES ($datos9) ";
	
		$inserta9=mysql_query($sentencia9,$conexion);
	

}

	header ("Location: ".$alumnos);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

?>