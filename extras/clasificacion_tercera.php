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
$ssql = "select * from `$tabla20` WHERE id=1";
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
}
///////////////////////////////////////////////////////
$ssql2 = "select * from `$tabla20` WHERE id=2";
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
}
///////////////////////////////////////////////////////
$ssql3 = "select * from `$tabla20` WHERE id=3";
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
}
///////////////////////////////////////////////////////
$ssql4 = "select * from `$tabla20` WHERE id=4";
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
}
///////////////////////////////////////////////////////
$ssql5 = "select * from `$tabla20` WHERE id=5";
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
}
/////////////////////////////////////////////////////////////
$ssql6 = "select * from `$tabla20` WHERE id=6";
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
}
/////////////////////////////////////////////////////////////
$ssql7 = "select * from `$tabla20` WHERE id=7";
$resultado7 = mysql_query($ssql7);
while ($row=mysql_fetch_object($resultado7)){
$uno7=$row->uno;
$dos7=$row->dos;
$tres7=$row->tres;
$cuatro7=$row->cuatro;
}
/////////////////////////////////////////////////////////////
$ssql8 = "select * from `$tabla20` WHERE id=8";
$resultado8 = mysql_query($ssql8);
while ($row=mysql_fetch_object($resultado8)){
$uno8=$row->uno;
$dos8=$row->dos;
$tres8=$row->tres;
$cuatro8=$row->cuatro;
}
/////////////////////////////////////////////////////////////
$ssql9 = "select * from `$tabla20` WHERE id=9";
$resultado9 = mysql_query($ssql9);
while ($row=mysql_fetch_object($resultado9)){
$uno9=$row->uno;
$dos9=$row->dos;
$tres9=$row->tres;
$cuatro9=$row->cuatro;
}
/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla21` WHERE id_fecha=1";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){
$fecha1=$row->fecha;
$hora1=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha2 = "select * from `$tabla21` WHERE id_fecha=2";
$resultado_fecha2 = mysql_query($ssql_fecha2);
while ($row=mysql_fetch_object($resultado_fecha2)){
$fecha2=$row->fecha;
$hora2=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha3 = "select * from `$tabla21` WHERE id_fecha=3";
$resultado_fecha3 = mysql_query($ssql_fecha3);
while ($row=mysql_fetch_object($resultado_fecha3)){
$fecha3=$row->fecha;
$hora3=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha4 = "select * from `$tabla21` WHERE id_fecha=4";
$resultado_fecha4 = mysql_query($ssql_fecha4);
while ($row=mysql_fetch_object($resultado_fecha4)){
$fecha4=$row->fecha;
$hora4=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha5 = "select * from `$tabla21` WHERE id_fecha=5";
$resultado_fecha5 = mysql_query($ssql_fecha5);
while ($row=mysql_fetch_object($resultado_fecha5)){
$fecha5=$row->fecha;
$hora5=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha6 = "select * from `$tabla21` WHERE id_fecha=6";
$resultado_fecha6 = mysql_query($ssql_fecha6);
while ($row=mysql_fetch_object($resultado_fecha6)){
$fecha6=$row->fecha;
$hora6=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha7 = "select * from `$tabla21` WHERE id_fecha=7";
$resultado_fecha7 = mysql_query($ssql_fecha7);
while ($row=mysql_fetch_object($resultado_fecha7)){
$fecha7=$row->fecha;
$hora7=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha8 = "select * from `$tabla21` WHERE id_fecha=8";
$resultado_fecha8 = mysql_query($ssql_fecha8);
while ($row=mysql_fetch_object($resultado_fecha8)){
$fecha8=$row->fecha;
$hora8=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha9 = "select * from `$tabla21` WHERE id_fecha=9";
$resultado_fecha9 = mysql_query($ssql_fecha9);
while ($row=mysql_fetch_object($resultado_fecha9)){
$fecha9=$row->fecha;
$hora9=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha10 = "select * from `$tabla21` WHERE id_fecha=10";
$resultado_fecha10 = mysql_query($ssql_fecha10);
while ($row=mysql_fetch_object($resultado_fecha10)){
$fecha10=$row->fecha;
$hora10=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha11 = "select * from `$tabla21` WHERE id_fecha=11";
$resultado_fecha11 = mysql_query($ssql_fecha11);
while ($row=mysql_fetch_object($resultado_fecha11)){
$fecha11=$row->fecha;
$hora11=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha12 = "select * from `$tabla21` WHERE id_fecha=12";
$resultado_fecha12 = mysql_query($ssql_fecha12);
while ($row=mysql_fetch_object($resultado_fecha12)){
$fecha12=$row->fecha;
$hora12=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha13 = "select * from `$tabla21` WHERE id_fecha=13";
$resultado_fecha13 = mysql_query($ssql_fecha13);
while ($row=mysql_fetch_object($resultado_fecha13)){
$fecha13=$row->fecha;
$hora13=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha14 = "select * from `$tabla21` WHERE id_fecha=14";
$resultado_fecha14 = mysql_query($ssql_fecha14);
while ($row=mysql_fetch_object($resultado_fecha14)){
$fecha14=$row->fecha;
$hora14=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha15 = "select * from `$tabla21` WHERE id_fecha=15";
$resultado_fecha15 = mysql_query($ssql_fecha15);
while ($row=mysql_fetch_object($resultado_fecha15)){
$fecha15=$row->fecha;
$hora15=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha16 = "select * from `$tabla21` WHERE id_fecha=16";
$resultado_fecha16 = mysql_query($ssql_fecha16);
while ($row=mysql_fetch_object($resultado_fecha16)){
$fecha16=$row->fecha;
$hora16=$row->hora;
}
?>

<table border='1' id='texto_nocturno'>
	<tr>
		<td>
        <span class='titulo'>III TORNEO PADEL MARCHENA</span><br><br>
        TERCERA<br><br>
   	  </td>
	</tr>

</table>
<div align="center"><a href="clasificacion.php"><b>Volver</b></a></div>    
<form action="clasificacion_tercera2.php" method="post">
<table width="auto" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
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
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='uno' value='<?php echo $uno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td></td>
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
    <td><input type="text"  name='dos' value='<?php echo $dos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td rowspan="2">1&deg;</td>
    <td rowspan="2"><div align="center" style="font-size:10px"><?php echo $fecha1."(".$hora1.")" ?></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name='uno5' value='<?php echo $uno5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='dos5' value='<?php echo $dos5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='tres' value='<?php echo $tres; ?>'  <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='cuatro' value='<?php echo $cuatro; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='uno7' value='<?php echo $uno7; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='dos7' value='<?php echo $dos7; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>5</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha5 ."(".$hora5.")" ?></div></td>
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
    <td><input type="text"  name='cinco' value='<?php echo $cinco; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td></td>
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
    <td><input type="text"  name='seis' value='<?php echo $seis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td rowspan="2">2&deg;</td>
    <td rowspan="2"><div align="center" style="font-size:10px"><?php echo $fecha2 ."(".$hora2.")" ?></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cuatro5' value='<?php echo $cuatro5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='tres5' value='<?php echo $tres5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td ></td>
    <td>&nbsp;</td>
    <td></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='siete' value='<?php echo $siete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text"  name='uno9' value='<?php echo $uno9; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td rowspan="2">&hArr;</td>
    <td><input type="text"  name='tres9' value='<?php echo $tres9; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='ocho' value='<?php echo $ocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text"  name='dos9' value='<?php echo $dos9; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td><input type="text"  name='cuatro9' value='<?php echo $cuatro9; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>7</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha7 ."(".$hora7.")" ?></div></td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><b>FINAL</b></div></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='nueve' value='<?php echo $nueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>8</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text"  name='diez' value='<?php echo $diez; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center" style="font-size:10px"><?php echo $fecha8 ."(".$hora8.")" ?></div></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td rowspan="2">3&deg;</td>
    <td rowspan="2"><div align="center" style="font-size:10px"><?php echo $fecha3 ."(".$hora3.")" ?></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name='cinco5' value='<?php echo $cinco5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='seis5' value='<?php echo $seis5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    <td><input type="text" name='once' value='<?php echo $once; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='doce' value='<?php echo $doce; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name='tres7' value='<?php echo $tres7; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='cuatro7' value='<?php echo $cuatro7; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>6</td>
    <td><div align="center" style="font-size:10px"><?php echo $fecha6 ."(".$hora6.")" ?></div></td>
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
    <td><input type="text" name='catorce' value='<?php echo $catorce; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td rowspan="2">4&deg;</td>
    <td rowspan="2"><div align="center" style="font-size:10px"><?php echo $fecha4 ."(".$hora4.")" ?></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name='siete5' value='<?php echo $siete5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='ocho5' value='<?php echo $ocho5; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='quince' value='<?php echo $quince; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
      <td><input type="text" name='dieciseis' value='<?php echo $dieciseis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
      <form action="clasificacion_tercera_fecha.php" method="post">
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
  </tr>
</table>
<br />
<br />


<br />
<br />
<?php
}
cuerpo2();

pie();

?>