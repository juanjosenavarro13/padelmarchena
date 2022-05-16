<?php
session_start();
include("../../conexion.php");
include("../../seguridad.php");
include("../../includes.php");
$id_usuario=$_GET['id'];


$pag='bono.php?id=$id_usuario';

if ($_GET['id_partido']=="1"){
	$id_usuario=$_GET['id'];
	$b1='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b1=$b1 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b1=$b1 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b1='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="2"){
	$id_usuario=$_GET['id'];
	$b2='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b2=$b2 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b2=$b2 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b2='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="3"){
	$id_usuario=$_GET['id'];
	$b3='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b3=$b3 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b3=$b3 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b3='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="4"){
	$id_usuario=$_GET['id'];
	$b4='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b4=$b4 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b4=$b4 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b4='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="5"){
	$id_usuario=$_GET['id'];
	$b5='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b5=$b5 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b5=$b5 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b5='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="6"){
	$id_usuario=$_GET['id'];
	$b6='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b6=$b6 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b6=$b6 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b6='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="7"){
	$id_usuario=$_GET['id'];
	$b7='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b7=$b7 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b7=$b7 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b7='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="8"){
	$id_usuario=$_GET['id'];
	$b8='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b8=$b8 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b8=$b8 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b8='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="9"){
	$id_usuario=$_GET['id'];
	$b9='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b9=$b9 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b9=$b9 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b9='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
if ($_GET['id_partido']=="10"){
	$id_usuario=$_GET['id'];
	$b10='1';
	mysqli_query($conexion, "UPDATE `$tabla32` SET b10=$b10 WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE `$tabla35` SET b10=$b10 WHERE id_usuario=$id_usuario");
	$fecha=date("d-m-Y");
	$datos="b10='$fecha'";
	mysqli_query($conexion, "UPDATE $base . `$tabla36` SET $datos WHERE id_usuario=$id_usuario");
	mysqli_query($conexion, "UPDATE $base . `$tabla33` SET $datos WHERE id_usuario=$id_usuario") or die(mysqli_error());
	mysqli_close();
}
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
$mes=date(m);
$id_usuario=$_GET['id'];


//echo date('d/m/Y');
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////
/*-------------------------------- SELECIONA EL USUARIO --------------------------------*/
$ssql_usuario = "SELECT nombre, apellido,fecha FROM `$tabla31` WHERE id_usuario=$id_usuario";
$resultado_usuario = mysqli_query($conexion, $ssql_usuario);
$row_usuario = mysqli_fetch_object($resultado_usuario);

/*-------------------------------- BUSCAMOS LOS PARTIDOS OCUPADOS ----------------------*/
$ssql_partido = "SELECT * FROM `$tabla32` WHERE id_usuario=$id_usuario";
$resultado_partido = mysqli_query($conexion, $ssql_partido);
$row_partido = mysqli_fetch_object($resultado_partido);
$partido1=$row_partido->b1;
$partido2=$row_partido->b2;
$partido3=$row_partido->b3;
$partido4=$row_partido->b4;
$partido5=$row_partido->b5;
$partido6=$row_partido->b6;
$partido7=$row_partido->b7;
$partido8=$row_partido->b8;
$partido9=$row_partido->b9;
$partido10=$row_partido->b10;
/*-------------------------------- BUSCAMOS LAS FECHAS DE LOS PARTIDOS OCUPADOS ----------*/
$ssql_fecha = "SELECT * FROM `$tabla33` WHERE id_usuario=$id_usuario";
$resultado_fecha = mysqli_query($conexion, $ssql_fecha);
$row_fecha = mysqli_fetch_object($resultado_fecha);
$fecha1=$row_fecha->b1;
$fecha2=$row_fecha->b2;
$fecha3=$row_fecha->b3;
$fecha4=$row_fecha->b4;
$fecha5=$row_fecha->b5;
$fecha6=$row_fecha->b6;
$fecha7=$row_fecha->b7;
$fecha8=$row_fecha->b8;
$fecha9=$row_fecha->b9;
$fecha10=$row_fecha->b10;
?>

<div id="cabecera_alumnos">BONO 20&euro;</div>
<br />
<div id="tabla_bono_partidos">

<div id="nombre_bono"><b>NOMBRE:</b> <?php echo $row_usuario->nombre." ".$row_usuario->apellido; ?></div>
<div id="fechaP_bono"><b>ULTIMO PAGO:</b> <?php echo $row_usuario->fecha ?></div>
<form action='alta_bono.php' method='POST'> 
<br />
<table width="auto">
  <tr>
    <td><? if ($partido1==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=1"><img src="1.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=1"><img src="ok.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido2==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=2"><img src="2.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=2"><img src="ok.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido3==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=3"><img src="3.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=3"><img src="ok.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido4==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=4"><img src="4.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=4"><img src="ok.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido5==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=5"><img src="5.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=5"><img src="ok.png" border='0' /></a></div><? } ?></td>
  </tr>
  <tr>
    <td><div align="center"><? if ($fecha1!=0){ echo $fecha1;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha2!=0){ echo $fecha2;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha3!=0){ echo $fecha3;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha4!=0){ echo $fecha4;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha5!=0){ echo $fecha5;}else{echo "--/--/---";} ?></div></td>
  </tr>
  
   <tr>
    <td><? if ($partido6==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=6"><img src="6.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=6"><img src="no.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido7==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=7"><img src="7.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=7"><img src="no.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido8==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=8"><img src="8.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=8"><img src="no.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido9==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=9"><img src="9.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=9"><img src="no.png" border='0' /></a></div><? } ?></td>
    <td><? if ($partido10==0){ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=10"><img src="10.png" border='0' /></a></div><? }else{ ?><div align="center"><a href="bono.php?id=<?php echo $id_usuario ?>&id_partido=10"><img src="no.png" border='0' /></a></div><? } ?></td>
  </tr>
  <tr>
    <td><div align="center"><? if ($fecha6!=0){ echo $fecha6;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha7!=0){ echo $fecha7;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha8!=0){ echo $fecha8;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha9!=0){ echo $fecha9;}else{echo "--/--/---";} ?></div></td>
    <td><div align="center"><? if ($fecha10!=0){ echo $fecha10;}else{echo "--/--/---";} ?></div></td>
  </tr>

</table>


<br />

 <br />
 	<input type='hidden' name='id_usuario' value='<?php echo $id_usuario; ?>'>
    
    <a href='lista_bono.php' class="button_css3" style="text-decoration:none!important" />VOLVER</a>
    
    <input type='submit' value="RESET" name="RESET" class="button_css3" />
   
    <!--<input type="button" onclick="disp_confirm()" class="button_css3" style="text-decoration:none!important" value="BORRAR" />-->
    
</form>


    <br />
    <br />
</div>
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