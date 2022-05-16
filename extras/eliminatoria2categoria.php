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
$ssql = "select * from `$tabla46` WHERE id=1";
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
}

/////////////////////////////////////////////////////////////
$ssql_fecha = "select * from `$tabla47` WHERE idfecha=1";
$resultado_fecha = mysql_query($ssql_fecha);
while ($row=mysql_fetch_object($resultado_fecha)){
$fecha1=$row->fecha;
$hora1=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha2 = "select * from `$tabla47` WHERE idfecha=2";
$resultado_fecha2 = mysql_query($ssql_fecha2);
while ($row=mysql_fetch_object($resultado_fecha2)){
$fecha2=$row->fecha;
$hora2=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha3 = "select * from `$tabla47` WHERE idfecha=3";
$resultado_fecha3 = mysql_query($ssql_fecha3);
while ($row=mysql_fetch_object($resultado_fecha3)){
$fecha3=$row->fecha;
$hora3=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha4 = "select * from `$tabla47` WHERE idfecha=4";
$resultado_fecha4 = mysql_query($ssql_fecha4);
while ($row=mysql_fetch_object($resultado_fecha4)){
$fecha4=$row->fecha;
$hora4=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha5 = "select * from `$tabla47` WHERE idfecha=5";
$resultado_fecha5 = mysql_query($ssql_fecha5);
while ($row=mysql_fetch_object($resultado_fecha5)){
$fecha5=$row->fecha;
$hora5=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha6 = "select * from `$tabla47` WHERE idfecha=6";
$resultado_fecha6 = mysql_query($ssql_fecha6);
while ($row=mysql_fetch_object($resultado_fecha6)){
$fecha6=$row->fecha;
$hora6=$row->hora;
}
/////////////////////////////////////////////////////////////
$ssql_fecha7 = "select * from `$tabla47` WHERE idfecha=7";
$resultado_fecha7 = mysql_query($ssql_fecha7);
while ($row=mysql_fetch_object($resultado_fecha7)){
$fecha7=$row->fecha;
$hora7=$row->hora;
}

?>

<table border='1' id='texto_nocturno'>
	<tr>
		<td>
        <span class='titulo'>TORNEO VI ANIVERSARIO PADEL MARCHENA</span><br><br>
        Eliminatorias 2&deg; Categor&iacute;a<br><br>
   	  </td>
	</tr>

</table>
<div align="center"><a href="clasificacion.php"><b>Volver</b></a></div>    
<form action="eliminatoria2categoriaSQL.php" method="post">
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
    <td><input type="text" name='diecisiete' value='<?php echo $diecisiete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='dieciocho' value='<?php echo $dieciocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veinticinco' value='<?php echo $veinticinco; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veintiseis' value='<?php echo $veintiseis; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='diecinueve' value='<?php echo $diecinueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name='veinte' value='<?php echo $veinte; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text"  name='veintinueve' value='<?php echo $veintinueve; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td><input type="text"  name='treinta' value='<?php echo $treinta; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
    <td>&nbsp;</td>
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
    <td><div align="center"><b>GANADOR</b></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td rowspan="2">3&deg;</td>
    <td rowspan="2"><div align="center" style="font-size:10px"><?php echo $fecha3 ."(".$hora3.")" ?></div></td>
    <td>&nbsp;</td>
    <td><input type="text" name='veintiuno' value='<?php echo $veintiuno; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veintidos' value='<?php echo $veintidos; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veintisiete' value='<?php echo $veintisiete; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veintiocho' value='<?php echo $veintiocho; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veintitres' value='<?php echo $veintitres; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
    <td><input type="text" name='veinticuatro' value='<?php echo $veinticuatro; ?>' <?php if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1'){ ?>/> <?php }else{ ?> readonly="readonly" /><?php } ?></td>
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
      <form action="eliminatoria2fecha.php" method="post">
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