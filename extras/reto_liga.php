<?php
session_start();
include("../includes.php");
include("../conexion.php");

?>
	<link href="../estilos.css" rel="stylesheet" type="text/css" />
<?php
encabezado();
cabecera();
col_izda1();
enlaces_izda_portada();
administrar_portada();
col_izda2();
cuerpo1();
?>

<!-- CONTENIDO RETO LIGA -->

<?
if($_SESSION['autenticado']=='si' AND $_SESSION['privilegios']=='1' OR $_SESSION['privilegios']=='522959'){
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=01";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas1=$row->id;
$pareja1=$row->pareja;
$pj1=$row->pj;
$pg1=$row->pg;
$px_reto1=$row->px_reto;
$fecha1=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=02";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas2=$row->id;
$pareja2=$row->pareja;
$pj2=$row->pj;
$pg2=$row->pg;
$px_reto2=$row->px_reto;
$fecha2=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=03";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas3=$row->id;
$pareja3=$row->pareja;
$pj3=$row->pj;
$pg3=$row->pg;
$px_reto3=$row->px_reto;
$fecha3=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=04";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas4=$row->id;
$pareja4=$row->pareja;
$pj4=$row->pj;
$pg4=$row->pg;
$px_reto4=$row->px_reto;
$fecha4=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=05";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas5=$row->id;
$pareja5=$row->pareja;
$pj5=$row->pj;
$pg5=$row->pg;
$px_reto5=$row->px_reto;
$fecha5=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=06";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas6=$row->id;
$pareja6=$row->pareja;
$pj6=$row->pj;
$pg6=$row->pg;
$px_reto6=$row->px_reto;
$fecha6=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=07";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas7=$row->id;
$pareja7=$row->pareja;
$pj7=$row->pj;
$pg7=$row->pg;
$px_reto7=$row->px_reto;
$fecha7=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=08";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas8=$row->id;
$pareja8=$row->pareja;
$pj8=$row->pj;
$pg8=$row->pg;
$px_reto8=$row->px_reto;
$fecha8=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=09";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas9=$row->id;
$pareja9=$row->pareja;
$pj9=$row->pj;
$pg9=$row->pg;
$px_reto9=$row->px_reto;
$fecha9=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=10";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas10=$row->id;
$pareja10=$row->pareja;
$pj10=$row->pj;
$pg10=$row->pg;
$px_reto10=$row->px_reto;
$fecha10=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=11";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas11=$row->id;
$pareja11=$row->pareja;
$pj11=$row->pj;
$pg11=$row->pg;
$px_reto11=$row->px_reto;
$fecha11=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=12";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas12=$row->id;
$pareja12=$row->pareja;
$pj12=$row->pj;
$pg12=$row->pg;
$px_reto12=$row->px_reto;
$fecha12=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=13";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas13=$row->id;
$pareja13=$row->pareja;
$pj13=$row->pj;
$pg13=$row->pg;
$px_reto13=$row->px_reto;
$fecha13=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=14";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas14=$row->id;
$pareja14=$row->pareja;
$pj14=$row->pj;
$pg14=$row->pg;
$px_reto14=$row->px_reto;
$fecha14=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=15";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas15=$row->id;
$pareja15=$row->pareja;
$pj15=$row->pj;
$pg15=$row->pg;
$px_reto15=$row->px_reto;
$fecha15=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=16";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas16=$row->id;
$pareja16=$row->pareja;
$pj16=$row->pj;
$pg16=$row->pg;
$px_reto16=$row->px_reto;
$fecha16=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=17";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas17=$row->id;
$pareja17=$row->pareja;
$pj17=$row->pj;
$pg17=$row->pg;
$px_reto17=$row->px_reto;
$fecha17=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=18";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas18=$row->id;
$pareja18=$row->pareja;
$pj18=$row->pj;
$pg18=$row->pg;
$px_reto18=$row->px_reto;
$fecha18=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=19";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas19=$row->id;
$pareja19=$row->pareja;
$pj19=$row->pj;
$pg19=$row->pg;
$px_reto19=$row->px_reto;
$fecha19=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=20";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas20=$row->id;
$pareja20=$row->pareja;
$pj20=$row->pj;
$pg20=$row->pg;
$px_reto20=$row->px_reto;
$fecha20=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=21";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas21=$row->id;
$pareja21=$row->pareja;
$pj21=$row->pj;
$pg21=$row->pg;
$px_reto21=$row->px_reto;
$fecha21=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=22";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas22=$row->id;
$pareja22=$row->pareja;
$pj22=$row->pj;
$pg22=$row->pg;
$px_reto22=$row->px_reto;
$fecha22=$row->fecha;
}
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` WHERE id=23";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
$clas23=$row->id;
$pareja23=$row->pareja;
$pj23=$row->pj;
$pg23=$row->pg;
$px_reto23=$row->px_reto;
$fecha23=$row->fecha;
}

$ssql = "select * from `$tabla50` WHERE id=1";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){

$id_consulta1=$row->id;
$pareja_uno1=$row->parejauno;
$pareja_dos1=$row->parejados;
$fecha_1=$row->fecha;

}

$ssql = "select * from `$tabla50` WHERE id=2";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){

$id_consulta2=$row->id;
$pareja_uno2=$row->parejauno;
$pareja_dos2=$row->parejados;
$fecha_2=$row->fecha;

}

$ssql = "select * from `$tabla50` WHERE id=3";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){

$id_consulta3=$row->id;
$pareja_uno3=$row->parejauno;
$pareja_dos3=$row->parejados;
$fecha_3=$row->fecha;

}

$ssql = "select * from `$tabla50` WHERE id=4";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){

$id_consulta4=$row->id;
$pareja_uno4=$row->parejauno;
$pareja_dos4=$row->parejados;
$fecha_4=$row->fecha;

}


$ssql = "select * from `$tabla50` WHERE id=5";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){

$id_consulta5=$row->id;
$pareja_uno5=$row->parejauno;
$pareja_dos5=$row->parejados;
$fecha_5=$row->fecha;

}






?>
<table width="600" height="552" border="1" id='tabla_gestion'>
  <tr height='40'>
    <td width='58'><b>CLAS.</b></td>
    <td width='520'><b>PAREJA</b></td>
    <td width='65'><b>PJ</b></td>
    <td width='59'><b>PG</b></td>
    <!--<td width='714'><b>PROXIMO RETO</b></td>
    <td width='403'><b>FECHA</b></td>-->
  </tr>
  <tr><form action="guardar.php" method="post" >
    <td><input type='hidden' value='$clas1' name='clas1' style='width:100%'><? echo $clas1 ?></td>
    <td><input type='text' value='<? echo $pareja1 ?>' name='pareja1' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj1 ?>' name='pj1' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg1 ?>' name='pg1' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto1 ?>' name='px_reto1' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha1 ?>' name='fecha1' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas2' name='clas2' style='width:100%'><? echo $clas2 ?></td>
    <td><input type='text' value='<? echo $pareja2 ?>' name='pareja2' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj2 ?>' name='pj2' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg2 ?>' name='pg2' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto2 ?>' name='px_reto2' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha2 ?>' name='fecha2' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas3' name='clas3' style='width:100%'><? echo $clas3 ?></td>
    <td><input type='text' value='<? echo $pareja3 ?>' name='pareja3' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj3 ?>' name='pj3' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg3 ?>' name='pg3' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto3 ?>' name='px_reto3' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha3 ?>' name='fecha3' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas4' name='clas4' style='width:100%'><? echo $clas4 ?></td>
    <td><input type='text' value='<? echo $pareja4 ?>' name='pareja4' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj4 ?>' name='pj4' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg4 ?>' name='pg4' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto4 ?>' name='px_reto4' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha4 ?>' name='fecha4' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas5' name='clas5' style='width:100%'><? echo $clas5 ?></td>
    <td><input type='text' value='<? echo $pareja5 ?>' name='pareja5' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj5 ?>' name='pj5' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg5 ?>' name='pg5' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto5 ?>' name='px_reto5' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha5 ?>' name='fecha5' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas6' name='clas6' style='width:100%'><? echo $clas6 ?></td>
    <td><input type='text' value='<? echo $pareja6 ?>' name='pareja6' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj6 ?>' name='pj6' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg6 ?>' name='pg6' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto6 ?>' name='px_reto6' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha6 ?>' name='fecha6' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas7' name='clas7' style='width:100%'><? echo $clas7 ?></td>
    <td><input type='text' value='<? echo $pareja7 ?>' name='pareja7' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj7 ?>' name='pj7' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg7 ?>' name='pg7' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto7 ?>' name='px_reto7' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha7 ?>' name='fecha7' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas8' name='clas8' style='width:100%'><? echo $clas8 ?></td>
    <td><input type='text' value='<? echo $pareja8 ?>' name='pareja8' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj8 ?>' name='pj8' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg8 ?>' name='pg8' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto8 ?>' name='px_reto8' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha8 ?>' name='fecha8' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas9' name='clas9' style='width:100%'><? echo $clas9 ?></td>
    <td><input type='text' value='<? echo $pareja9 ?>' name='pareja9' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj9 ?>' name='pj9' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg9 ?>' name='pg9' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto9 ?>' name='px_reto9' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha9 ?>' name='fecha9' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas10' name='clas10' style='width:100%'><? echo $clas10 ?></td>
    <td><input type='text' value='<? echo $pareja10 ?>' name='pareja10' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj10 ?>' name='pj10' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg10 ?>' name='pg10' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto10 ?>' name='px_reto10' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha10 ?>' name='fecha10' style='width:100%'></input></td>-->
  </tr>
    <tr>
    <td><input type='hidden' value='$clas11' name='clas11' style='width:100%'><? echo $clas11 ?></td>
    <td><input type='text' value='<? echo $pareja11 ?>' name='pareja11' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj11 ?>' name='pj11' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg11 ?>' name='pg11' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto11 ?>' name='px_reto11' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha11 ?>' name='fecha11' style='width:100%'></input></td>-->
  </tr>
    <tr>
    <td><input type='hidden' value='$clas12' name='clas12' style='width:100%'><? echo $clas12 ?></td>
    <td><input type='text' value='<? echo $pareja12 ?>' name='pareja12' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj12 ?>' name='pj12' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg12 ?>' name='pg12' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto12 ?>' name='px_reto12' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha12?>' name='fecha12' style='width:100%'></input></td>-->
  </tr>
    <tr>
    <td><input type='hidden' value='$clas13' name='clas13' style='width:100%'><? echo $clas13 ?></td>
    <td><input type='text' value='<? echo $pareja13 ?>' name='pareja13' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj13 ?>' name='pj13' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg13 ?>' name='pg13' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto13 ?>' name='px_reto13' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha13 ?>' name='fecha13' style='width:100%'></input></td>-->
  </tr>
    <tr>
    <td><input type='hidden' value='$clas14' name='clas14' style='width:100%'><? echo $clas14 ?></td>
    <td><input type='text' value='<? echo $pareja14 ?>' name='pareja14' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj14 ?>' name='pj14' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg14 ?>' name='pg14' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto14 ?>' name='px_reto14' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha14 ?>' name='fecha14' style='width:100%'></input></td>-->
  </tr>
    <tr>
    <td><input type='hidden' value='$clas15' name='clas15' style='width:100%'><? echo $clas15 ?></td>
    <td><input type='text' value='<? echo $pareja15 ?>' name='pareja15' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj15 ?>' name='pj15' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg15 ?>' name='pg15' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto15 ?>' name='px_reto15' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha15 ?>' name='fecha15' style='width:100%'></input></td>-->
  </tr>
  <tr>
    <td><input type='hidden' value='$clas16' name='clas16' style='width:100%'><? echo $clas16 ?></td>
    <td><input type='text' value='<? echo $pareja16 ?>' name='pareja16' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj16 ?>' name='pj16' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg16 ?>' name='pg16' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto16 ?>' name='px_reto16' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha16 ?>' name='fecha16' style='width:100%'></input></td>-->
  </tr>
  <tr>
    <td><input type='hidden' value='$clas17' name='clas17' style='width:100%'><? echo $clas17 ?></td>
    <td><input type='text' value='<? echo $pareja17 ?>' name='pareja17' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj17 ?>' name='pj17' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg17 ?>' name='pg17' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto17 ?>' name='px_reto17' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha17 ?>' name='fecha17' style='width:100%'></input></td>-->
  </tr>
  <tr>
    <td><input type='hidden' value='$clas18' name='clas18' style='width:100%'><? echo $clas18 ?></td>
    <td><input type='text' value='<? echo $pareja18 ?>' name='pareja18' style='width:100%'></input></td>
	<td><input type='text' value='<? echo $pj18 ?>' name='pj18' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg18 ?>' name='pg18' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto18 ?>' name='px_reto18' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha18 ?>' name='fecha18' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas19' name='clas19' style='width:100%'><? echo $clas19 ?></td>
    <td><input type='text' value='<? echo $pareja19 ?>' name='pareja19' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj19 ?>' name='pj19' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg19 ?>' name='pg19' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto19 ?>' name='px_reto19' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha19 ?>' name='fecha19' style='width:100%'></input></td>-->
  </tr>
  <tr>
    <td><input type='hidden' value='$clas20' name='clas20' style='width:100%'><? echo $clas20 ?></td>
    <td><input type='text' value='<? echo $pareja20 ?>' name='pareja20' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj20 ?>' name='pj20' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg20 ?>' name='pg20' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto20 ?>' name='px_reto20' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha20 ?>' name='fecha20' style='width:100%'></input></td>-->
  </tr>
  <tr>
    <td><input type='hidden' value='$clas21' name='clas21' style='width:100%'><? echo $clas21 ?></td>
    <td><input type='text' value='<? echo $pareja21 ?>' name='pareja21' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj21 ?>' name='pj21' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg21 ?>' name='pg21' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto21 ?>' name='px_reto21' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha21 ?>' name='fecha21' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas22' name='clas22' style='width:100%'><? echo $clas22 ?></td>
    <td><input type='text' value='<? echo $pareja22 ?>' name='pareja22' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj22 ?>' name='pj22' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg22 ?>' name='pg22' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto22 ?>' name='px_reto22' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha22 ?>' name='fecha22' style='width:100%'></input></td>-->
  </tr>
   <tr>
    <td><input type='hidden' value='$clas23' name='clas23' style='width:100%'><? echo $clas23 ?></td>
    <td><input type='text' value='<? echo $pareja23 ?>' name='pareja23' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pj23 ?>' name='pj23' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $pg23 ?>' name='pg23' style='width:100%'></input></td>
    <!--<td><input type='text' value='<? echo $px_reto23 ?>' name='px_reto23' style='width:100%'></input></td>
    <td><input type='text' value='<? echo $fecha23 ?>' name='fecha23' style='width:100%'></input></td>-->
  </tr>
</table>
<br /><br /><br /><br />
<input type="submit" name="guardar" value="Guardar" class="button_css3" /></form>

<br /><br /><hr>

<form action="guardaPartido.php" method="post" >
<table id='tabla_gestion' width='500'>
  <tr height='40'>
  
    <td colspan= 4><b><u>PR&Oacute;XIMOS PARTIDOS</u></b></td> 
	
  </tr>
  <tr height='25' style="border-bottom: 1px solid black;">
  
	<td>&nbsp;</td>
    <td><b>Pareja 1</b></td> 
    <td><b>Fecha/Hora</b></td> 
    <td><b>Pareja 2</b></td> 
	
  </tr>
  <tr height='35' style="border-bottom: 1px solid black;">
    
	<td>1</td>	
	<input type='hidden' value='1' name='id1'>
    <td><input type='text' value='<? echo $pareja_uno1 ?>' name='parejauno1' ></input></td>
    <td><input type='text' value='<? echo $fecha_1 ?>' name='fecha1'></input></td>
    <td><input type='text' value='<? echo $pareja_dos1 ?>' name='parejados1'></input></td>
    
  </tr>
  
   <tr height='35' style="border-bottom: 1px solid black;">
   
	<td>2</td>
	<input type='hidden' value='2' name='id2'>
    <td><input type='text' value='<? echo $pareja_uno2 ?>' name='parejauno2' ></input></td>
    <td><input type='text' value='<? echo $fecha_2 ?>' name='fecha2'></input></td>
    <td><input type='text' value='<? echo $pareja_dos2 ?>' name='parejados2'></input></td>
   
  </tr>
   
   <tr height='35' style="border-bottom: 1px solid black;">
    
	<td>3</td>
	<input type='hidden' value='3' name='id3'>
    <td><input type='text' value='<? echo $pareja_uno3 ?>' name='parejauno3' ></input></td>
    <td><input type='text' value='<? echo $fecha_3 ?>' name='fecha3'></input></td>
    <td><input type='text' value='<? echo $pareja_dos3 ?>' name='parejados3'></input></td>
    
  </tr>
   
  <tr height='35' style="border-bottom: 1px solid black;">
    
	<td>4</td>
	<input type='hidden' value='4' name='id4'>
    <td><input type='text' value='<? echo $pareja_uno4 ?>' name='parejauno4' ></input></td>
    <td><input type='text' value='<? echo $fecha_4 ?>' name='fecha4'></input></td>
    <td><input type='text' value='<? echo $pareja_dos4 ?>' name='parejados4'></input></td>
    
  </tr>
   
  <tr height='35'>
    
	<td>5</td>
	<input type='hidden' value='5' name='id5'>
    <td><input type='text' value='<? echo $pareja_uno5 ?>' name='parejauno5' ></input></td>
    <td><input type='text' value='<? echo $fecha_5 ?>' name='fecha5'></input></td>
    <td><input type='text' value='<? echo $pareja_dos5 ?>' name='parejados5'></input></td>
    
  </tr>
  
  
</table>

<br /><br /><br /><br />

<input type="submit" name="guardar" value="Guardar" class="button_css3" /></form>


<br /><br />


<? }else{
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla40` ORDER BY id";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='1' id='tabla_gestion' width='600'>";

echo "
  <tr height='40'>
    <td width='58'><b>CLAS.</b></td>
    <td width='520'><b>PAREJA</b></td>
    <td width='65'><b>PJ</b></td>
    <td width='59'><b>PG</b></td>
    <!--<td width='714'><b>PROXIMO RETO</b></td>
    <td width='403'><b>FECHA</b></td>-->
  </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$clas=$row->id;
$pareja=$row->pareja;
$pj=$row->pj;
$pg=$row->pg;
$px_reto=$row->px_reto;
$fecha=$row->fecha;

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$clas."</td>";
			echo "<td align='left'>".$pareja."</td>";
			echo "<td align='center'>".$pj."</td>";
			echo "<td align='center'>".$pg."</td>"; 
			//echo "<td align='left'>".$px_reto."</td>";
			//echo "<td align='left'>".$fecha."</td>";  
	 echo "</tr>";
	}
	echo "</table>";
	
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla50` ORDER BY id";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<br><br><br><br><table border='1' id='tabla_gestion' width='500'>";

echo "
 <tr height='40'>
  
    <td colspan= 4><b><u>PR&Oacute;XIMOS PARTIDOS</u></b></td> 
	
  </tr>
  <tr height='25' style='border-bottom: 1px solid black;'>
  
	<td>&nbsp;</td>
    <td align='center'><b>Pareja 1</b></td> 
    <td align='center'><b>Fecha/Hora</b></td> 
    <td align='center'><b>Pareja 2</b></td> 
	
  </tr>";

$i=1;
while ($row=mysql_fetch_object($resultado)){

$id=$row->id;
$pareja_uno=$row->parejauno;
$pareja_dos=$row->parejados;
$fecha_=$row->fecha;


$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td align='center'>".$id."</td>";
			echo "<td align='center'>".$pareja_uno."</td>";
			echo "<td align='center'>".$fecha_."</td>";
			echo "<td align='center'>".$pareja_dos."</td>"; 
			  
	 echo "</tr>";
	}
	echo "</table><br><br><br><br>";
}

?>
<!-- -->  




<?php
cuerpo2();
col_derecha1();
eventos1();
eventos2();
saldo1();
saldo2();
torneos1();
torneos2();
actividades1();
actividades2();
col_derecha2();
pie();

?>