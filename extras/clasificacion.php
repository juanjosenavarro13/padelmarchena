<?php
session_start();
include("../includes.php");
include("../conexion.php");

?>
	<link href="style.css" rel="stylesheet" type="text/css" />
<?php
encabezado();
cabecera();

cuerpo1();
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla18` WHERE id=1";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$uno=$row->uno;
$dos=$row->dos;
$tres=$row->tres;
$cuatro=$row->cuatro;
$cinco=$row->cinco;
$seis=$row->seis;
$siete=$row->siete;
$ocho=$row->ocho;
$nueve=$row->nueve;
$diez=$row->diez;
$once=$row->once;
$doce=$row->doce;
$trece=$row->trece;
$catorce=$row->catorce;
$quince=$row->quince;
$dieciseis=$row->dieciseis;
$diecisiete=$row->diecisiete;
$dieciocho=$row->dieciocho;
$diecinueve=$row->diecinueve;
$veinte=$row->veinte;
$veintiuno=$row->veintiuno;
$veintidos=$row->veintidos;
$veintitres=$row->veintitres;
$veinticuatro=$row->veinticuatro;
$veinticinco=$row->veinticinco;
$veintiseis=$row->veintiseis;
$veintisiete=$row->veintisiete;
$veintiocho=$row->veintiocho;
$veintinueve=$row->veintinueve;
$treinta=$row->treinta;
$treintaiuno=$row->treintaiuno;
$treintaidos=$row->treintaidos;
$treintaitres=$row->treintaitres;
$treintaicuatro=$row->treintaicuatro;
$treintaicinco=$row->treintaicinco;
$treintaiseis=$row->treintaiseis;
$treintaisiete=$row->treintaisiete;
$treintaiocho=$row->treintaiocho;
$treintainueve=$row->treintainueve;
$cuarenta=$row->cuarenta;
$cuarentaiuno=$row->cuarentaiuno;
$cuarentaidos=$row->cuarentaidos;
$cuarentaitres=$row->cuarentaitres;
$cuarentaicuatro=$row->cuarentaicuatro;
$cuarentaicinco=$row->cuarentaicinco;
$cuarentaiseis=$row->cuarentaiseis;
$cuarentaisiete=$row->cuarentaisiete;
$cuarentaiocho=$row->cuarentaiocho;
$cuarentainueve=$row->cuarentainueve;
$cincuenta=$row->cincuenta;
$cincuentaiuno=$row->cincuentaiuno;
$cincuentaidos=$row->cincuentaidos;
}
///////////////////////////////////////////////////////
$ssql2 = "select * from `$tabla18` WHERE id=2";
$resultado2 = mysql_query($ssql2);
while ($row=mysql_fetch_object($resultado2)){
$uno2=$row->uno;
$dos2=$row->dos;
$tres2=$row->tres;
$cuatro2=$row->cuatro;
$cinco2=$row->cinco;
$seis2=$row->seis;
$siete2=$row->siete;
$ocho2=$row->ocho;
$nueve2=$row->nueve;
$diez2=$row->diez;
$once2=$row->once;
$doce2=$row->doce;
$trece2=$row->trece;
$catorce2=$row->catorce;
$quince2=$row->quince;
$dieciseis2=$row->dieciseis;
$diecisiete2=$row->diecisiete;
$dieciocho2=$row->dieciocho;
$diecinueve2=$row->diecinueve;
$veinte2=$row->veinte;
$veintiuno2=$row->veintiuno;
$veintidos2=$row->veintidos;
$veintitres2=$row->veintitres;
$veinticuatro2=$row->veinticuatro;
$veinticinco2=$row->veinticinco;
$veintiseis2=$row->veintiseis;
$veintisiete2=$row->veintisiete;
$veintiocho2=$row->veintiocho;
$veintinueve2=$row->veintinueve;
$treinta2=$row->treinta;
$treintaiuno2=$row->treintaiuno;
$treintaidos2=$row->treintaidos;
$treintaitres2=$row->treintaitres;
$treintaicuatro2=$row->treintaicuatro;
$treintaicinco2=$row->treintaicinco;
$treintaiseis2=$row->treintaiseis;
$treintaisiete2=$row->treintaisiete;
$treintaiocho2=$row->treintaiocho;
$treintainueve2=$row->treintainueve;
$cuarenta2=$row->cuarenta;
$cuarentaiuno2=$row->cuarentaiuno;
$cuarentaidos2=$row->cuarentaidos;
$cuarentaitres2=$row->cuarentaitres;
$cuarentaicuatro2=$row->cuarentaicuatro;
$cuarentaicinco2=$row->cuarentaicinco;
$cuarentaiseis2=$row->cuarentaiseis;
$cuarentaisiete2=$row->cuarentaisiete;
$cuarentaiocho2=$row->cuarentaiocho;
$cuarentainueve2=$row->cuarentainueve;
$cincuenta2=$row->cincuenta;
$cincuentaiuno2=$row->cincuentaiuno;
$cincuentaidos2=$row->cincuentaidos;


}
///////////////////////////////////////////////////////
$ssql3 = "select * from `$tabla18` WHERE id=3";
$resultado3 = mysql_query($ssql3);
while ($row=mysql_fetch_object($resultado3)){
$uno3=$row->uno;
$dos3=$row->dos;
$tres3=$row->tres;
$cuatro3=$row->cuatro;
$cinco3=$row->cinco;
$seis3=$row->seis;
$siete3=$row->siete;
$ocho3=$row->ocho;
$nueve3=$row->nueve;
$diez3=$row->diez;
$once3=$row->once;
$doce3=$row->doce;
$trece3=$row->trece;
$catorce3=$row->catorce;
$quince3=$row->quince;
$dieciseis3=$row->dieciseis;
$diecisiete3=$row->diecisiete;
$dieciocho3=$row->dieciocho;
$diecinueve3=$row->diecinueve;
$veinte3=$row->veinte;
$veintiuno3=$row->veintiuno;
$veintidos3=$row->veintidos;
$veintitres3=$row->veintitres;
$veinticuatro3=$row->veinticuatro;
$veinticinco3=$row->veinticinco;
$veintiseis3=$row->veintiseis;
$veintisiete3=$row->veintisiete;
$veintiocho3=$row->veintiocho;
$veintinueve3=$row->veintinueve;
$treinta3=$row->treinta;
$treintaiuno3=$row->treintaiuno;
$treintaidos3=$row->treintaidos;
$treintaitres3=$row->treintaitres;
$treintaicuatro3=$row->treintaicuatro;
$treintaicinco3=$row->treintaicinco;
$treintaiseis3=$row->treintaiseis;
$treintaisiete3=$row->treintaisiete;
$treintaiocho3=$row->treintaiocho;
$treintainueve3=$row->treintainueve;
$cuarenta3=$row->cuarenta;
$cuarentaiuno3=$row->cuarentaiuno;
$cuarentaidos3=$row->cuarentaidos;
$cuarentaitres3=$row->cuarentaitres;
$cuarentaicuatro3=$row->cuarentaicuatro;
$cuarentaicinco3=$row->cuarentaicinco;
$cuarentaiseis3=$row->cuarentaiseis;
$cuarentaisiete3=$row->cuarentaisiete;
$cuarentaiocho3=$row->cuarentaiocho;
$cuarentainueve3=$row->cuarentainueve;
$cincuenta3=$row->cincuenta;
$cincuentaiuno3=$row->cincuentaiuno;
$cincuentaidos3=$row->cincuentaidos;



}


///////////////////////////////////////////////////////
$ssql4 = "select * from `$tabla18` WHERE id=4";
$resultado4 = mysql_query($ssql4);
while ($row=mysql_fetch_object($resultado4)){
$uno4=$row->uno;
$dos4=$row->dos;
$tres4=$row->tres;
$cuatro4=$row->cuatro;
$cinco4=$row->cinco;
$seis4=$row->seis;
$siete4=$row->siete;
$ocho4=$row->ocho;
$nueve4=$row->nueve;
$diez4=$row->diez;
$once4=$row->once;
$doce4=$row->doce;
$trece4=$row->trece;
$catorce4=$row->catorce;
$quince4=$row->quince;
$dieciseis4=$row->dieciseis;
$diecisiete4=$row->diecisiete;
$dieciocho4=$row->dieciocho;
$diecinueve4=$row->diecinueve;
$veinte4=$row->veinte;
$veintiuno4=$row->veintiuno;
$veintidos4=$row->veintidos;
$veintitres4=$row->veintitres;
$veinticuatro4=$row->veinticuatro;
$veinticinco4=$row->veinticinco;
$veintiseis4=$row->veintiseis;
$veintisiete4=$row->veintisiete;
$veintiocho4=$row->veintiocho;
$veintinueve4=$row->veintinueve;
$treinta4=$row->treinta;
$treintaiuno4=$row->treintaiuno;
$treintaidos4=$row->treintaidos;
$treintaitres4=$row->treintaitres;
$treintaicuatro4=$row->treintaicuatro;
$treintaicinco4=$row->treintaicinco;
$treintaiseis4=$row->treintaiseis;
$treintaisiete4=$row->treintaisiete;
$treintaiocho4=$row->treintaiocho;
$treintainueve4=$row->treintainueve;
$cuarenta4=$row->cuarenta;
$cuarentaiuno4=$row->cuarentaiuno;
$cuarentaidos4=$row->cuarentaidos;
$cuarentaitres4=$row->cuarentaitres;
$cuarentaicuatro4=$row->cuarentaicuatro;
$cuarentaicinco4=$row->cuarentaicinco;
$cuarentaiseis4=$row->cuarentaiseis;
$cuarentaisiete4=$row->cuarentaisiete;
$cuarentaiocho4=$row->cuarentaiocho;
$cuarentainueve4=$row->cuarentainueve;
$cincuenta4=$row->cincuenta;
$cincuentaiuno4=$row->cincuentaiuno;
$cincuentaidos4=$row->cincuentaidos;


}
///////////////////////////////////////////////////////
$ssql5 = "select * from `$tabla18` WHERE id=5";
$resultado5 = mysql_query($ssql5);
while ($row=mysql_fetch_object($resultado5)){
$uno5=$row->uno;
$dos5=$row->dos;
$tres5=$row->tres;
$cuatro5=$row->cuatro;
$cinco5=$row->cinco;
$seis5=$row->seis;
$siete5=$row->siete;
$ocho5=$row->ocho;
$nueve5=$row->nueve;
$diez5=$row->diez;
$once5=$row->once;
$doce5=$row->doce;
$trece5=$row->trece;
$catorce5=$row->catorce;
$quince5=$row->quince;
$dieciseis5=$row->dieciseis;
}
/////////////////////////////////////////////////////////////
$ssql6 = "select * from `$tabla18` WHERE id=6";
$resultado6 = mysql_query($ssql6);
while ($row=mysql_fetch_object($resultado6)){
$uno6=$row->uno;
$dos6=$row->dos;
$tres6=$row->tres;
$cuatro6=$row->cuatro;
$cinco6=$row->cinco;
$seis6=$row->seis;
$siete6=$row->siete;
$ocho6=$row->ocho;
$nueve6=$row->nueve;
$diez6=$row->diez;
$once6=$row->once;
$doce6=$row->doce;
$trece6=$row->trece;
$catorce6=$row->catorce;
$quince6=$row->quince;
$dieciseis6=$row->dieciseis;
}
/////////////////////////////////////////////////////////////
$ssql7 = "select * from `$tabla18` WHERE id=7";
$resultado7 = mysql_query($ssql7);
while ($row=mysql_fetch_object($resultado7)){
$uno7=$row->uno;
$dos7=$row->dos;
$tres7=$row->tres;
$cuatro7=$row->cuatro;
$cinco7=$row->cinco;
$seis7=$row->seis;
$siete7=$row->siete;
$ocho7=$row->ocho;
$nueve7=$row->nueve;
$diez7=$row->diez;
$once7=$row->once;
$doce7=$row->doce;
$trece7=$row->trece;
$catorce7=$row->catorce;
$quince7=$row->quince;
$dieciseis7=$row->dieciseis;
}
/////////////////////////////////////////////////////////////
$ssql8 = "select * from `$tabla18` WHERE id=8";
$resultado8 = mysql_query($ssql8);
while ($row=mysql_fetch_object($resultado8)){
$uno8=$row->uno;
$dos8=$row->dos;
$tres8=$row->tres;
$cuatro8=$row->cuatro;
$cinco8=$row->cinco;
$seis8=$row->seis;
$siete8=$row->siete;
$ocho8=$row->ocho;
$nueve8=$row->nueve;
$diez8=$row->diez;
$once8=$row->once;
$doce8=$row->doce;
$trece8=$row->trece;
$catorce8=$row->catorce;
$quince8=$row->quince;
$dieciseis8=$row->dieciseis;
}
/////////////////////////////////////////////////////////////
$ssql9 = "select * from `$tabla18` WHERE id=9";
$resultado9 = mysql_query($ssql9);
while ($row=mysql_fetch_object($resultado9)){
$uno9=$row->uno;
$dos9=$row->dos;
$tres9=$row->tres;
$cuatro9=$row->cuatro;
$cinco9=$row->cinco;
$seis9=$row->seis;
$siete9=$row->siete;
$ocho9=$row->ocho;
$nueve9=$row->nueve;
$diez9=$row->diez;
$once9=$row->once;
$doce9=$row->doce;
$trece9=$row->trece;
$catorce9=$row->catorce;
$quince9=$row->quince;
$dieciseis9=$row->dieciseis;
}
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla19` WHERE id_fecha=1";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){
$fecha1=$row->fecha;
$hora1=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha2 = "select * from `$tabla19` WHERE id_fecha=2";
$resultado_fecha2 = mysql_query($ssql_fecha2);
while ($row=mysql_fetch_object($resultado_fecha2)){
$fecha2=$row->fecha;
$hora2=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha3 = "select * from `$tabla19` WHERE id_fecha=3";
$resultado_fecha3 = mysql_query($ssql_fecha3);
while ($row=mysql_fetch_object($resultado_fecha3)){
$fecha3=$row->fecha;
$hora3=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha4 = "select * from `$tabla19` WHERE id_fecha=4";
$resultado_fecha4 = mysql_query($ssql_fecha4);
while ($row=mysql_fetch_object($resultado_fecha4)){
$fecha4=$row->fecha;
$hora4=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha5 = "select * from `$tabla19` WHERE id_fecha=5";
$resultado_fecha5 = mysql_query($ssql_fecha5);
while ($row=mysql_fetch_object($resultado_fecha5)){
$fecha5=$row->fecha;
$hora5=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha6 = "select * from `$tabla19` WHERE id_fecha=6";
$resultado_fecha6 = mysql_query($ssql_fecha6);
while ($row=mysql_fetch_object($resultado_fecha6)){
$fecha6=$row->fecha;
$hora6=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha7 = "select * from `$tabla19` WHERE id_fecha=7";
$resultado_fecha7 = mysql_query($ssql_fecha7);
while ($row=mysql_fetch_object($resultado_fecha7)){
$fecha7=$row->fecha;
$hora7=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha8 = "select * from `$tabla19` WHERE id_fecha=8";
$resultado_fecha8 = mysql_query($ssql_fecha8);
while ($row=mysql_fetch_object($resultado_fecha8)){
$fecha8=$row->fecha;
$hora8=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha9 = "select * from `$tabla19` WHERE id_fecha=9";
$resultado_fecha9 = mysql_query($ssql_fecha9);
while ($row=mysql_fetch_object($resultado_fecha9)){
$fecha9=$row->fecha;
$hora9=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha10 = "select * from `$tabla19` WHERE id_fecha=10";
$resultado_fecha10 = mysql_query($ssql_fecha10);
while ($row=mysql_fetch_object($resultado_fecha10)){
$fecha10=$row->fecha;
$hora10=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha11 = "select * from `$tabla19` WHERE id_fecha=11";
$resultado_fecha11 = mysql_query($ssql_fecha11);
while ($row=mysql_fetch_object($resultado_fecha11)){
$fecha11=$row->fecha;
$hora11=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha12 = "select * from `$tabla19` WHERE id_fecha=12";
$resultado_fecha12 = mysql_query($ssql_fecha12);
while ($row=mysql_fetch_object($resultado_fecha12)){
$fecha12=$row->fecha;
$hora12=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha13 = "select * from `$tabla19` WHERE id_fecha=13";
$resultado_fecha13 = mysql_query($ssql_fecha13);
while ($row=mysql_fetch_object($resultado_fecha13)){
$fecha13=$row->fecha;
$hora13=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha14 = "select * from `$tabla19` WHERE id_fecha=14";
$resultado_fecha14 = mysql_query($ssql_fecha14);
while ($row=mysql_fetch_object($resultado_fecha14)){
$fecha14=$row->fecha;
$hora14=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha15 = "select * from `$tabla19` WHERE id_fecha=15";
$resultado_fecha15 = mysql_query($ssql_fecha15);
while ($row=mysql_fetch_object($resultado_fecha15)){
$fecha15=$row->fecha;
$hora15=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha16 = "select * from `$tabla19` WHERE id_fecha=16";
$resultado_fecha16 = mysql_query($ssql_fecha16);
while ($row=mysql_fetch_object($resultado_fecha16)){
$fecha16=$row->fecha;
$hora16=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha17 = "select * from `$tabla19` WHERE id_fecha=17";
$resultado_fecha17 = mysql_query($ssql_fecha17);
while ($row=mysql_fetch_object($resultado_fecha17)){
$fecha17=$row->fecha;
$hora17=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha18 = "select * from `$tabla19` WHERE id_fecha=18";
$resultado_fecha18 = mysql_query($ssql_fecha18);
while ($row=mysql_fetch_object($resultado_fecha18)){
$fecha18=$row->fecha;
$hora18=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha19 = "select * from `$tabla19` WHERE id_fecha=19";
$resultado_fecha19 = mysql_query($ssql_fecha19);
while ($row=mysql_fetch_object($resultado_fecha19)){
$fecha19=$row->fecha;
$hora19=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha20 = "select * from `$tabla19` WHERE id_fecha=20";
$resultado_fecha20 = mysql_query($ssql_fecha20);
while ($row=mysql_fetch_object($resultado_fecha20)){
$fecha20=$row->fecha;
$hora20=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha21 = "select * from `$tabla19` WHERE id_fecha=21";
$resultado_fecha21 = mysql_query($ssql_fecha21);
while ($row=mysql_fetch_object($resultado_fecha21)){
$fecha21=$row->fecha;
$hora21=$row->hora;
}

/////////////////////////////////////////////////////////////
$ssql_fecha22 = "select * from `$tabla19` WHERE id_fecha=22";
$resultado_fecha22 = mysql_query($ssql_fecha22);
while ($row=mysql_fetch_object($resultado_fecha22)){
$fecha22=$row->fecha;
$hora22=$row->hora;
}

/////////////////////////////////////////////////////////////
$ssql_fecha23 = "select * from `$tabla19` WHERE id_fecha=23";
$resultado_fecha23 = mysql_query($ssql_fecha23);
while ($row=mysql_fetch_object($resultado_fecha23)){
$fecha23=$row->fecha;
$hora23=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha24 = "select * from `$tabla19` WHERE id_fecha=24";
$resultado_fecha24 = mysql_query($ssql_fecha24);
while ($row=mysql_fetch_object($resultado_fecha24)){
$fecha24=$row->fecha;
$hora24=$row->hora;
}

$ssql_fecha25 = "select * from `$tabla19` WHERE id_fecha=25";
$resultado_fecha25 = mysql_query($ssql_fecha25);
while ($row=mysql_fetch_object($resultado_fecha25)){
$fecha25=$row->fecha;
$hora25=$row->hora;
}

$ssql_fecha26 = "select * from `$tabla19` WHERE id_fecha=26";
$resultado_fecha26 = mysql_query($ssql_fecha26);
while ($row=mysql_fetch_object($resultado_fecha26)){
$fecha26=$row->fecha;
$hora26=$row->hora;
}

$ssql_fecha27 = "select * from `$tabla19` WHERE id_fecha=27";
$resultado_fecha27 = mysql_query($ssql_fecha27);
while ($row=mysql_fetch_object($resultado_fecha27)){
$fecha27=$row->fecha;
$hora27=$row->hora;
}

$ssql_fecha28 = "select * from `$tabla19` WHERE id_fecha=28";
$resultado_fecha28 = mysql_query($ssql_fecha28);
while ($row=mysql_fetch_object($resultado_fecha28)){
$fecha28=$row->fecha;
$hora28=$row->hora;
}

$ssql_fecha29 = "select * from `$tabla19` WHERE id_fecha=29";
$resultado_fecha29 = mysql_query($ssql_fecha29);
while ($row=mysql_fetch_object($resultado_fecha29)){
$fecha29=$row->fecha;
$hora29=$row->hora;
}

$ssql_fecha30 = "select * from `$tabla19` WHERE id_fecha=30";
$resultado_fecha30 = mysql_query($ssql_fecha30);
while ($row=mysql_fetch_object($resultado_fecha30)){
$fecha30=$row->fecha;
$hora30=$row->hora;
}

$ssql_fecha31 = "select * from `$tabla19` WHERE id_fecha=31";
$resultado_fecha31 = mysql_query($ssql_fecha31);
while ($row=mysql_fetch_object($resultado_fecha31)){
$fecha31=$row->fecha;
$hora31=$row->hora;
}

$ssql_fecha32 = "select * from `$tabla19` WHERE id_fecha=32";
$resultado_fecha32 = mysql_query($ssql_fecha32);
while ($row=mysql_fetch_object($resultado_fecha32)){
$fecha32=$row->fecha;
$hora32=$row->hora;
}

$ssql_fecha33 = "select * from `$tabla19` WHERE id_fecha=33";
$resultado_fecha33 = mysql_query($ssql_fecha33);
while ($row=mysql_fetch_object($resultado_fecha33)){
$fecha33=$row->fecha;
$hora33=$row->hora;
}

$ssql_fecha34 = "select * from `$tabla19` WHERE id_fecha=34";
$resultado_fecha34 = mysql_query($ssql_fecha34);
while ($row=mysql_fetch_object($resultado_fecha34)){
$fecha34=$row->fecha;
$hora34=$row->hora;
}

$ssql_fecha35 = "select * from `$tabla19` WHERE id_fecha=35";
$resultado_fecha35 = mysql_query($ssql_fecha35);
while ($row=mysql_fetch_object($resultado_fecha35)){
$fecha35=$row->fecha;
$hora35=$row->hora;
}

$ssql_fecha36 = "select * from `$tabla19` WHERE id_fecha=36";
$resultado_fecha36 = mysql_query($ssql_fecha36);
while ($row=mysql_fetch_object($resultado_fecha36)){
$fecha36=$row->fecha;
$hora36=$row->hora;
}

$ssql_fecha37 = "select * from `$tabla19` WHERE id_fecha=37";
$resultado_fecha37 = mysql_query($ssql_fecha37);
while ($row=mysql_fetch_object($resultado_fecha37)){
$fecha37=$row->fecha;
$hora37=$row->hora;
}

$ssql_fecha38 = "select * from `$tabla19` WHERE id_fecha=38";
$resultado_fecha38 = mysql_query($ssql_fecha38);
while ($row=mysql_fetch_object($resultado_fecha38)){
$fecha38=$row->fecha;
$hora38=$row->hora;
}

$ssql_fecha39 = "select * from `$tabla19` WHERE id_fecha=39";
$resultado_fecha39 = mysql_query($ssql_fecha39);
while ($row=mysql_fetch_object($resultado_fecha39)){
$fecha39=$row->fecha;
$hora39=$row->hora;
}

$ssql_fecha40 = "select * from `$tabla19` WHERE id_fecha=40";
$resultado_fecha40 = mysql_query($ssql_fecha40);
while ($row=mysql_fetch_object($resultado_fecha40)){
$fecha40=$row->fecha;
$hora40=$row->hora;
}

$ssql_fecha41 = "select * from `$tabla19` WHERE id_fecha=41";
$resultado_fecha41 = mysql_query($ssql_fecha41);
while ($row=mysql_fetch_object($resultado_fecha41)){
$fecha41=$row->fecha;
$hora41=$row->hora;
}
?>

<table border='1' id='texto_nocturno'>
	<tr>
		<td>
        <span class='titulo'>TORNEO VI ANIVERSARIO PADEL MARCHENA</span><br><br>     
   	  </td>
      
	</tr>
    
</table>
<div style="text-align:center;"><a href="eliminatoria1categoria.php"><b>Eliminatoria 1&deg; Categor&iacute;a</b></a> | <a href="eliminatoria2categoria.php"><b>Eliminatoria 2&deg; Categor&iacute;a</b></a> | <a href="eliminatoria3categoria.php"><b>Eliminatoria 3&deg; Categor&iacute;a</b></a></div>
<form action="clasificacion2.php" method="post">
<table width="auto" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><b>GRUPOS</b></div></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
	<td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
	
  <tr>
    <td>&nbsp;</td>
	<td align="center">GRUPO A</td>   
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td align="center">GRUPO B</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">GRUPO C</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td align="center">GRUPO D</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    
    <td></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>1&deg; cat.</td>
    <td><input type="text" name='uno' value='<?php echo $uno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?><br>
	<input type="text" name='dos' value='<?php echo $dos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>1&deg; cat.</td>
    <td><input type="text" name='uno2' value='<?php echo $uno2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?><br>
	<input type="text" name='dos2' value='<?php echo $dos2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>1&deg; cat.</td>
    <td><input type="text" name='uno3' value='<?php echo $uno3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?><br>
	<input type="text" name='dos3' value='<?php echo $dos3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	 <td>1&deg; cat.</td>
    <td><input type="text" name='uno4' value='<?php echo $uno4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?><br>
	<input type="text" name='dos4' value='<?php echo $dos4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
 
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
	
		<table cellspacing="1" style="border: 1px solid black;">
	
			<tr>
			
			<td>&nbsp;PJ&nbsp;</td><td>&nbsp;JF&nbsp;</td><td>&nbsp;JC&nbsp;</td>
			
			</tr>
	
		</table>
		
	</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
	
		<table cellspacing="1" style="border: 1px solid black;">
	
			<tr>
			
			<td>&nbsp;PJ&nbsp;</td><td>&nbsp;JF&nbsp;</td><td>&nbsp;JC&nbsp;</td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>
	
		<table cellspacing="1" style="border: 1px solid black;">
	
			<tr>
			
			<td>&nbsp;PJ&nbsp;</td><td>&nbsp;JF&nbsp;</td><td>&nbsp;JC&nbsp;</td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
	
		<table cellspacing="1" style="border: 1px solid black;">
	
			<tr>
			
			<td>&nbsp;PJ&nbsp;</td><td>&nbsp;JF&nbsp;</td><td>&nbsp;JC&nbsp;</td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='tres' value='<?php echo $tres; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='cuatro' value='<?php echo $cuatro; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td></td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='uno5' value='<?php echo $uno5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='dos5' value='<?php echo $dos5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='tres5' value='<?php echo $tres5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>    
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="text" name='tres2' value='<?php echo $tres2; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='cuatro2' value='<?php echo $cuatro2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='uno6' value='<?php echo $uno6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='dos6' value='<?php echo $dos6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='tres6' value='<?php echo $tres6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>		
	<td>&nbsp;</td>
	<td><input type="text" name='tres3' value='<?php echo $tres3; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='cuatro3' value='<?php echo $cuatro3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='uno7' value='<?php echo $uno7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='dos7' value='<?php echo $dos7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='tres7' value='<?php echo $tres7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td><input type="text" name='tres4' value='<?php echo $tres4; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='cuatro4' value='<?php echo $cuatro4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td></td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='uno8' value='<?php echo $uno8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='dos8' value='<?php echo $dos8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='tres8' value='<?php echo $tres8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='cinco' value='<?php echo $cinco; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?><br>
	<input type="text"  name='seis' value='<?php echo $seis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='cuatro5' value='<?php echo $cuatro5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='cinco5' value='<?php echo $cinco5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='seis5' value='<?php echo $seis5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='cinco2' value='<?php echo $cinco2; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='seis2' value='<?php echo $seis2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='cuatro6' value='<?php echo $cuatro6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='cinco6' value='<?php echo $cinco6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='seis6' value='<?php echo $seis6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td><input type="text" name='cinco3' value='<?php echo $cinco3; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='seis3' value='<?php echo $seis3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='cuatro7' value='<?php echo $cuatro7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='cinco7' value='<?php echo $cinco7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='seis7' value='<?php echo $seis7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td><input type="text" name='cinco4' value='<?php echo $cinco4; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='seis4' value='<?php echo $seis4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='cuatro8' value='<?php echo $cuatro8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='cinco8' value='<?php echo $cinco8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='seis8' value='<?php echo $seis8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='siete' value='<?php echo $siete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	<br><input type="text"  name='ocho' value='<?php echo $ocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='siete5' value='<?php echo $siete5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='ocho5' value='<?php echo $ocho5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='nueve5' value='<?php echo $nueve5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='siete2' value='<?php echo $siete2; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='ocho2' value='<?php echo $ocho2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='siete6' value='<?php echo $siete6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='ocho6' value='<?php echo $ocho6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='nueve6' value='<?php echo $nueve6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='siete3' value='<?php echo $siete3; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='ocho3' value='<?php echo $ocho3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='siete7' value='<?php echo $siete7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='ocho7' value='<?php echo $ocho7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='nueve7' value='<?php echo $nueve7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='siete4' value='<?php echo $siete4; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='ocho4' value='<?php echo $ocho4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='siete8' value='<?php echo $siete8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='ocho8' value='<?php echo $ocho8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='nueve8' value='<?php echo $nueve8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='nueve' value='<?php echo $nueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	<br><input type="text"  name='diez' value='<?php echo $diez; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='diez5' value='<?php echo $diez5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='once5' value='<?php echo $once5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='doce5' value='<?php echo $doce5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='nueve2' value='<?php echo $nueve2; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='diez2' value='<?php echo $diez2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
   <td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='diez6' value='<?php echo $diez6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='once6' value='<?php echo $once6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='doce6' value='<?php echo $doce6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='nueve3' value='<?php echo $nueve3; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='diez3' value='<?php echo $diez3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='diez7' value='<?php echo $diez7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='once7' value='<?php echo $once7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='doce7' value='<?php echo $doce7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='nueve4' value='<?php echo $nueve4; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='diez4' value='<?php echo $diez4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='diez8' value='<?php echo $diez8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='once8' value='<?php echo $once8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='doce8' value='<?php echo $doce8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='once' value='<?php echo $once; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	<br><input type="text"  name='doce' value='<?php echo $doce; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='trece5' value='<?php echo $trece5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='catorce5' value='<?php echo $catorce5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='quince5' value='<?php echo $quince5; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='once2' value='<?php echo $once2; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='doce2' value='<?php echo $doce2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
   <td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='trece6' value='<?php echo $trece6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='catorce6' value='<?php echo $catorce6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='quince6' value='<?php echo $quince6; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='once3' value='<?php echo $once3; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='doce3' value='<?php echo $doce3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='trece7' value='<?php echo $trece7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='catorce7' value='<?php echo $catorce7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='quince7' value='<?php echo $quince7; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='once4' value='<?php echo $once4; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?>
	</br><input type="text"  name='doce4' value='<?php echo $doce4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>
		<table cellspacing="1">
	
			<tr>
			
			<td><input type="text" size="1" name='trece8' value='<?php echo $trece8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='catorce8' value='<?php echo $catorce8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			<td><input type="text" size="1" name='quince8' value='<?php echo $quince8; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
			
			</tr>
	
		</table>
	</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  
	</tr>
	
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
 
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>	
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><b>PARTIDOS</b></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td align="center"></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>   
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td align="center"></td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
	
   <tr>
    
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	
   </tr>
	<tr>
	
	<td>&nbsp;</td>
    <td><input type="text" name='trece' value='<?php echo $trece; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaitres' value='<?php echo $treintaitres; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='trece2' value='<?php echo $trece2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaitres2' value='<?php echo $treintaitres2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='trece3' value='<?php echo $trece3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaitres3' value='<?php echo $treintaitres3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='trece4' value='<?php echo $trece4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaitres4' value='<?php echo $treintaitres4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
 
 
    <tr>
	
    <td>&nbsp;</td>
    <td><input type="text" name='catorce' value='<?php echo $catorce; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaicuatro' value='<?php echo $treintaicuatro; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='catorce2' value='<?php echo $catorce2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaicuatro2' value='<?php echo $treintaicuatro2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='catorce3' value='<?php echo $catorce3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaicuatro3' value='<?php echo $treintaicuatro3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='catorce4' value='<?php echo $catorce4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaicuatro4' value='<?php echo $treintaicuatro4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td align="right">1&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha1 ."(".$hora1.")" ?></div></td>
    <td align="right">7&deg</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha7 ."(".$hora7.")" ?></div></td>
    <td>&nbsp;</td>
	<td align="right">12&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha12 ."(".$hora12.")" ?></div></td>
	<td align="right">17&deg</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha17 ."(".$hora17.")" ?></div></td>
    <td>&nbsp;</td>
    <td align="right">22&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha22 ."(".$hora22.")" ?></div></td>
    <td align="right">27&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha27 ."(".$hora27.")" ?></div></td>
    <td>&nbsp;</td>
	<td align="right">32&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha32 ."(".$hora32.")" ?></div></td>
	<td align="right">37&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha37 ."(".$hora37.")" ?></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='quince' value='<?php echo $quince; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaicinco' value='<?php echo $treintaicinco; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   <td><input type="text" name='quince2' value='<?php echo $quince2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaicinco2' value='<?php echo $treintaicinco2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td><input type="text" name='quince3' value='<?php echo $quince3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaicinco3' value='<?php echo $treintaicinco3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   <td><input type="text" name='quince4' value='<?php echo $quince4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaicinco4' value='<?php echo $treintaicinco4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='dieciseis' value='<?php echo $dieciseis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaiseis' value='<?php echo $treintaiseis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='dieciseis2' value='<?php echo $dieciseis2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaiseis2' value='<?php echo $treintaiseis2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='dieciseis3' value='<?php echo $dieciseis3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaiseis3' value='<?php echo $treintaiseis3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='dieciseis4' value='<?php echo $dieciseis4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaiseis4' value='<?php echo $treintaiseis4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
    </tr>
  <tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
   
  <tr>
    
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>    
	<td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>	
	<td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
		<td>&nbsp;</td>
		<td><input type="text" name='diecisiete' value='<?php echo $diecisiete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaisiete' value='<?php echo $treintaisiete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='diecisiete2' value='<?php echo $diecisiete2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaisiete2' value='<?php echo $treintaisiete2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='diecisiete3' value='<?php echo $diecisiete3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaisiete3' value='<?php echo $treintaisiete3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='diecisiete4' value='<?php echo $diecisiete4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaisiete4' value='<?php echo $treintaisiete4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
	<tr>
	
		<td>&nbsp;</td>
		<td><input type="text" name='dieciocho' value='<?php echo $dieciocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaiocho' value='<?php echo $treintaiocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='dieciocho2' value='<?php echo $dieciocho2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaiocho2' value='<?php echo $treintaiocho2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='dieciocho3' value='<?php echo $dieciocho3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaiocho3' value='<?php echo $treintaiocho3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='dieciocho4' value='<?php echo $dieciocho4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='treintaiocho4' value='<?php echo $treintaiocho4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
	
	<tr>
      <td align="right">2&deg;</td>
	  <td><div align="center" style="font-size:10px"><?php echo $fecha2 ."(".$hora2.")" ?></div></td>
      <td align="right">8&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha8 ."(".$hora8.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">13&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha13 ."(".$hora13.")" ?></div></td>
      <td align="right">18&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha18 ."(".$hora18.")" ?></div></td>
      <td>&nbsp;</td>
      <td align="right">23&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha23 ."(".$hora23.")" ?></div></td>
      <td align="right">28&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha28 ."(".$hora28.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">33&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha33 ."(".$hora33.")" ?></div></td>
	  <td align="right">38&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha38 ."(".$hora38.")" ?></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
      
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='diecinueve' value='<?php echo $diecinueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintainueve' value='<?php echo $treintainueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='diecinueve2' value='<?php echo $diecinueve2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintainueve2' value='<?php echo $treintainueve2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='diecinueve3' value='<?php echo $diecinueve3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintainueve3' value='<?php echo $treintainueve3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='diecinueve4' value='<?php echo $diecinueve4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintainueve4' value='<?php echo $treintainueve4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veinte' value='<?php echo $veinte; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarenta' value='<?php echo $cuarenta; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veinte2' value='<?php echo $veinte2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarenta2' value='<?php echo $cuarenta2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veinte3' value='<?php echo $veinte3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarenta3' value='<?php echo $cuarenta3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veinte4' value='<?php echo $veinte4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarenta4' value='<?php echo $cuarenta4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiuno' value='<?php echo $veintiuno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaiuno' value='<?php echo $cuarentaiuno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiuno2' value='<?php echo $veintiuno2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaiuno2' value='<?php echo $cuarentaiuno2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veintiuno3' value='<?php echo $veintiuno3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaiuno3' value='<?php echo $cuarentaiuno3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiuno4' value='<?php echo $veintiuno4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaiuno4' value='<?php echo $cuarentaiuno4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name='veintidos' value='<?php echo $veintidos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	  <td>&nbsp;</td>
	  <td><input type="text" name='cuarentaidos' value='<?php echo $cuarentaidos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name='veintidos2' value='<?php echo $veintidos2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td><input type="text" name='cuarentaidos2' value='<?php echo $cuarentaidos2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td><input type="text" name='veintidos3' value='<?php echo $veintidos3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	  <td>&nbsp;</td>
	  <td><input type="text" name='cuarentaidos3' value='<?php echo $cuarentaidos3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name='veintidos4' value='<?php echo $veintidos4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td><input type="text" name='cuarentaidos4' value='<?php echo $cuarentaidos4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td align="right">3&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha3 ."(".$hora3.")" ?></div></td>
      <td align="right">9&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha9 ."(".$hora9.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">14&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha14 ."(".$hora14.")" ?></div></td>
      <td align="right">19&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha19 ."(".$hora19.")" ?></div></td>
      <td>&nbsp;</td>
      <td align="right">24&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha24 ."(".$hora24.")" ?></div></td>
      <td align="right">29&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha29 ."(".$hora29.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">34&deg</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha34 ."(".$hora34.")" ?></div></td>
      <td align="right">39&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha39 ."(".$hora39.")" ?></div></td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
      
      
      
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veintitres' value='<?php echo $veintitres; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaitres' value='<?php echo $cuarentaitres; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintitres2' value='<?php echo $veintitres2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaitres2' value='<?php echo $cuarentaitres2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veintitres3' value='<?php echo $veintitres3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaitres3' value='<?php echo $cuarentaitres3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintitres4' value='<?php echo $veintitres4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaitres4' value='<?php echo $cuarentaitres4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veinticuatro' value='<?php echo $veinticuatro; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaicuatro' value='<?php echo $cuarentaicuatro; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veinticuatro2' value='<?php echo $veinticuatro2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaicuatro2' value='<?php echo $cuarentaicuatro2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veinticuatro3' value='<?php echo $veinticuatro3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaicuatro3' value='<?php echo $cuarentaicuatro3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veinticuatro4' value='<?php echo $veinticuatro4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaicuatro4' value='<?php echo $cuarentaicuatro4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="text" name='veinticinco' value='<?php echo $veinticinco; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaicinco' value='<?php echo $cuarentaicinco; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='veinticinco2' value='<?php echo $veinticinco2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaicinco2' value='<?php echo $cuarentaicinco2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='veinticinco3' value='<?php echo $veinticinco3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaicinco3' value='<?php echo $cuarentaicinco3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='veinticinco4' value='<?php echo $veinticinco4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaicinco4' value='<?php echo $cuarentaicinco4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
	<tr>
	
		<td>&nbsp;</td>
		<td><input type="text" name='veintiseis' value='<?php echo $veintiseis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaiseis' value='<?php echo $cuarentaiseis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='veintiseis2' value='<?php echo $veintiseis2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaiseis2' value='<?php echo $cuarentaiseis2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='veintiseis3' value='<?php echo $veintiseis3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaiseis3' value='<?php echo $cuarentaiseis3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="text" name='veintiseis4' value='<?php echo $veintiseis4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td><input type="text" name='cuarentaiseis4' value='<?php echo $cuarentaiseis4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
    </tr>
	
	<tr>
      <td align="right">4&deg;</td>
	  <td><div align="center" style="font-size:10px"><?php echo $fecha4 ."(".$hora4.")" ?></div></td>
      <td align="right">10&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha10 ."(".$hora10.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">15&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha15 ."(".$hora15.")" ?></div></td>
      <td align="right">20&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha20 ."(".$hora20.")" ?></div></td>
      <td>&nbsp;</td>
      <td align="right">25&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha25 ."(".$hora25.")" ?></div></td>
      <td align="right">30&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha30 ."(".$hora30.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">35&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha35 ."(".$hora35.")" ?></div></td>
	  <td align="right">40&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha40 ."(".$hora40.")" ?></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
      
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veintisiete' value='<?php echo $veintisiete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaisiete' value='<?php echo $cuarentaisiete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintisiete2' value='<?php echo $veintisiete2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaisiete2' value='<?php echo $cuarentaisiete2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veintisiete3' value='<?php echo $veintisiete3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaisiete3' value='<?php echo $cuarentaisiete3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintisiete4' value='<?php echo $veintisiete4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaisiete4' value='<?php echo $cuarentaisiete4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiocho' value='<?php echo $veintiocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaiocho' value='<?php echo $cuarentaiocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiocho2' value='<?php echo $veintiocho2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaiocho2' value='<?php echo $cuarentaiocho2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veintiocho3' value='<?php echo $veintiocho3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentaiocho3' value='<?php echo $cuarentaiocho3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiocho4' value='<?php echo $veintiocho4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentaiocho4' value='<?php echo $cuarentaiocho4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veintinueve' value='<?php echo $veintinueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentainueve' value='<?php echo $cuarentainueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintinueve2' value='<?php echo $veintinueve2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentainueve2' value='<?php echo $cuarentainueve2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='veintinueve3' value='<?php echo $veintinueve3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cuarentainueve3' value='<?php echo $cuarentainueve3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintinueve4' value='<?php echo $veintinueve4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuarentainueve4' value='<?php echo $cuarentainueve4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name='treinta' value='<?php echo $treinta; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	  <td>&nbsp;</td>
	  <td><input type="text" name='cincuenta' value='<?php echo $cincuenta; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name='treinta2' value='<?php echo $treinta2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td><input type="text" name='cincuenta2' value='<?php echo $cincuenta2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td><input type="text" name='treinta3' value='<?php echo $treinta3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
	  <td>&nbsp;</td>
	  <td><input type="text" name='cincuenta3' value='<?php echo $cincuenta3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="text" name='treinta4' value='<?php echo $treinta4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td><input type="text" name='cincuenta4' value='<?php echo $cincuenta4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	 <tr>
      <td align="right">5&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha5 ."(".$hora5.")" ?></div></td>
      <td align="right">11&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha11 ."(".$hora11.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">16&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha16 ."(".$hora16.")" ?></div></td>
      <td align="right">21&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha21 ."(".$hora21.")" ?></div></td>
      <td>&nbsp;</td>
      <td align="right">26&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha26 ."(".$hora26.")" ?></div></td>
      <td align="right">31&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha31 ."(".$hora31.")" ?></div></td>
      <td>&nbsp;</td>
	  <td align="right">36&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha36 ."(".$hora36.")" ?></div></td>
      <td align="right">41&deg;</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha41 ."(".$hora41.")" ?></div></td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
      
      
      
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaiuno' value='<?php echo $treintaiuno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cincuentaiuno' value='<?php echo $cincuentaiuno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaiuno2' value='<?php echo $treintaiuno2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cincuentaiuno2' value='<?php echo $cincuentaiuno2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaiuno3' value='<?php echo $treintaiuno3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cincuentaiuno3' value='<?php echo $cincuentaiuno3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaiuno4' value='<?php echo $treintaiuno4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cincuentaiuno4' value='<?php echo $cincuentaiuno4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaidos' value='<?php echo $treintaidos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cincuentaidos' value='<?php echo $cincuentaidos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaidos2' value='<?php echo $treintaidos2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cincuentaidos2' value='<?php echo $cincuentaidos2; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td><input type="text" name='treintaidos3' value='<?php echo $treintaidos3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
	<td><input type="text" name='cincuentaidos3' value='<?php echo $cincuentaidos3; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='treintaidos4' value='<?php echo $treintaidos4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cincuentaidos4' value='<?php echo $cincuentaidos4; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
	
	
	
	
	
</table>
<a href="http://www.padelmarchena.es/tienda" target="_blank"><img src="banner_tienda_padel.jpg" /></a>

<?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){
	
?>
<br />
<input type="submit" name="guardar" value="Guardar" />
</form>
<br />
<br />
<hr />
<br />

<table width="auto" border="0">
  <tr>
    <td>
    <form action="clasificacion_fechas.php" method="post">
    <table width="auto" border="0">
  <tr>
    <th colspan="3" scope="col">MODIFICAR FECHAS y HORARIOS</th>
  </tr>
  <tr>
    <td>1&deg;&nbsp;</td>
    <td><input type="text" name='fecha1' value='<?php echo $fecha1; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora1' value='<?php echo $hora1; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>2&deg; &nbsp;</td>
    <td><input type="text" name='fecha2' value='<?php echo $fecha2; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora2' value='<?php echo $hora2; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>3&deg; &nbsp;</td>
    <td><input type="text" name='fecha3' value='<?php echo $fecha3; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora3' value='<?php echo $hora3; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>4&deg;&nbsp; </td>
    <td><input type="text" name='fecha4' value='<?php echo $fecha4; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora4' value='<?php echo $hora4; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>5&deg; &nbsp;</td>
    <td><input type="text" name='fecha5' value='<?php echo $fecha5; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora5' value='<?php echo $hora5; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>6&deg; &nbsp;</td>
    <td><input type="text" name='fecha6' value='<?php echo $fecha6; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora6' value='<?php echo $hora6; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>7&deg; &nbsp;</td>
    <td><input type="text" name='fecha7' value='<?php echo $fecha7; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora7' value='<?php echo $hora7; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>8&deg;&nbsp;</td>
    <td><input type="text" name='fecha8' value='<?php echo $fecha8; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora8' value='<?php echo $hora8; ?>' style="height:40px; text-align:center" /></td>
  </tr>
</table>
<br />
<input type="submit" name="guardar" value="Guardar" />
</form>
    
    
    </td>
    
    
    <td>&nbsp;&nbsp;</td>
    
    
    <td>
    
    <form action="clasificacion_fechas2.php" method="post">
    <table width="auto" border="0">
  <tr>
    <th colspan="3" scope="col">MODIFICAR FECHAS y HORARIOS</th>
  </tr>
  <tr>
    <td>9&deg;&nbsp;</td>
    <td><input type="text" name='fecha9' value='<?php echo $fecha9; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora9' value='<?php echo $hora9; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>10&deg; &nbsp;</td>
    <td><input type="text" name='fecha10' value='<?php echo $fecha10; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora10' value='<?php echo $hora10; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>11&deg; &nbsp;</td>
    <td><input type="text" name='fecha11' value='<?php echo $fecha11; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora11' value='<?php echo $hora11; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>12&deg;&nbsp; </td>
    <td><input type="text" name='fecha12' value='<?php echo $fecha12; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora12' value='<?php echo $hora12; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>13&deg; &nbsp;</td>
    <td><input type="text" name='fecha13' value='<?php echo $fecha13; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora13' value='<?php echo $hora13; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>14&deg; &nbsp;</td>
    <td><input type="text" name='fecha14' value='<?php echo $fecha14; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora14' value='<?php echo $hora14; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>15&deg; &nbsp;</td>
    <td><input type="text" name='fecha15' value='<?php echo $fecha15; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora15' value='<?php echo $hora15; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>16&deg;&nbsp;</td>
    <td><input type="text" name='fecha16' value='<?php echo $fecha16; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora16' value='<?php echo $hora16; ?>' style="height:40px; text-align:center" /></td>
  </tr>

</table>
<br />
  <input type="submit" name="guardar" value="Guardar" align="right" />
</form>
    </td>
    
    
    <td>&nbsp;</td>
  </tr>
</table>
<br />
<br />

<form action="clasificacion_fechas3.php" method="post">
<table width="auto" border="0">
  <tr>
    <th colspan="3" scope="col">MODIFICAR FECHAS y HORARIOS</th>
  </tr>
  <tr>
    <td>17&deg;&nbsp;</td>
    <td><input type="text" name='fecha17' value='<?php echo $fecha17; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora17' value='<?php echo $hora17; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>18&deg; &nbsp;</td>
    <td><input type="text" name='fecha18' value='<?php echo $fecha18; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora18' value='<?php echo $hora18; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>19&deg; &nbsp;</td>
    <td><input type="text" name='fecha19' value='<?php echo $fecha19; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora19' value='<?php echo $hora19; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>20&deg;&nbsp; </td>
    <td><input type="text" name='fecha20' value='<?php echo $fecha20; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora20' value='<?php echo $hora20; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>21&deg; &nbsp;</td>
    <td><input type="text" name='fecha21' value='<?php echo $fecha21; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora21' value='<?php echo $hora21; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>22&deg; &nbsp;</td>
    <td><input type="text" name='fecha22' value='<?php echo $fecha22; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora22' value='<?php echo $hora22; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>23&deg; &nbsp;</td>
    <td><input type="text" name='fecha23' value='<?php echo $fecha23; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora23' value='<?php echo $hora23; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>24&deg; &nbsp;</td>
    <td><input type="text" name='fecha24' value='<?php echo $fecha24; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora24' value='<?php echo $hora24; ?>' style="height:40px; text-align:center" /></td>
  </tr>
 
</table>
<br />
<input type="submit" name="guardar" value="Guardar" />
</form>
<br />
<br />

<table width="auto" border="0">
  <tr>
    <td>
    <form action="clasificacion_fechas4.php" method="post">
    <table width="auto" border="0">
  <tr>
    <th colspan="3" scope="col">MODIFICAR FECHAS y HORARIOS</th>
  </tr>
  <tr>
    <td>25&deg;&nbsp;</td>
    <td><input type="text" name='fecha25' value='<?php echo $fecha25; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora25' value='<?php echo $hora25; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>26&deg; &nbsp;</td>
    <td><input type="text" name='fecha26' value='<?php echo $fecha26; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora26' value='<?php echo $hora26; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>27&deg; &nbsp;</td>
    <td><input type="text" name='fecha27' value='<?php echo $fecha27; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora27' value='<?php echo $hora27; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>28&deg;&nbsp; </td>
    <td><input type="text" name='fecha28' value='<?php echo $fecha28; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora28' value='<?php echo $hora28; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>29&deg; &nbsp;</td>
    <td><input type="text" name='fecha29' value='<?php echo $fecha29; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora29' value='<?php echo $hora29; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>30&deg; &nbsp;</td>
    <td><input type="text" name='fecha30' value='<?php echo $fecha30; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora30' value='<?php echo $hora30; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>31&deg; &nbsp;</td>
    <td><input type="text" name='fecha31' value='<?php echo $fecha31; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora31' value='<?php echo $hora31; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>32&deg;&nbsp;</td>
    <td><input type="text" name='fecha32' value='<?php echo $fecha32; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora32' value='<?php echo $hora32; ?>' style="height:40px; text-align:center" /></td>
  </tr>
</table>
<br />
<input type="submit" name="guardar" value="Guardar" />
</form>
    
    
    </td>
    
    
    <td>&nbsp;&nbsp;</td>
    
    
    <td>
    
    <form action="clasificacion_fechas5.php" method="post">
    <table width="auto" border="0">
  <tr>
    <th colspan="3" scope="col">MODIFICAR FECHAS y HORARIOS</th>
  </tr>
  <tr>
    <td>33&deg;&nbsp;</td>
    <td><input type="text" name='fecha33' value='<?php echo $fecha33; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora33' value='<?php echo $hora33; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>34&deg; &nbsp;</td>
    <td><input type="text" name='fecha34' value='<?php echo $fecha34; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora34' value='<?php echo $hora34; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>35&deg; &nbsp;</td>
    <td><input type="text" name='fecha35' value='<?php echo $fecha35; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora35' value='<?php echo $hora35; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>36&deg;&nbsp; </td>
    <td><input type="text" name='fecha36' value='<?php echo $fecha36; ?>' style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora36' value='<?php echo $hora36; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>37&deg; &nbsp;</td>
    <td><input type="text" name='fecha37' value='<?php echo $fecha37; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora37' value='<?php echo $hora37; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>38&deg; &nbsp;</td>
    <td><input type="text" name='fecha38' value='<?php echo $fecha38; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora38' value='<?php echo $hora38; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>39&deg; &nbsp;</td>
    <td><input type="text" name='fecha39' value='<?php echo $fecha39; ?>' style="height:40px; text-align:center" /></td>
    <td><input type="text" name='hora39' value='<?php echo $hora39; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  <tr>
    <td>40&deg;&nbsp;</td>
    <td><input type="text" name='fecha40' value='<?php echo $fecha40; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora40' value='<?php echo $hora40; ?>' style="height:40px; text-align:center" /></td>
  </tr>
  
  <tr>
    <td>41&deg;&nbsp;</td>
    <td><input type="text" name='fecha41' value='<?php echo $fecha41; ?>'style="height:40px; text-align:center"  /></td>
    <td><input type="text" name='hora41' value='<?php echo $hora41; ?>' style="height:40px; text-align:center" /></td>
  </tr>

</table>
<br />
  <input type="submit" name="guardar" value="Guardar" align="right" />
</form>
    </td>
    
    
    <td>&nbsp;</td>
  </tr>
</table>

<?php echo $tabla18." esta es la variable"; ?>

<?php
}
cuerpo2();

pie();

?>