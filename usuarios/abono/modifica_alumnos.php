<?php
include ("../seguridad.php");
include("../../conexion.php");
include("../../includes.php");
$nombre=$_GET['nombre'];
$id=$_GET['id'];
$pag=$_SERVER['PHP_SELF'];
$fecha=date("Y:m:d");
/////////////////////////////////////////////////////////////
/*$ssql_cuenta = mysql_query("select n_cuenta4 from `$tabla14` WHERE id_alumno='$id_alumno' ");
$resultado_cuenta = mysql_fetch_row($ssql_cuenta);

echo $resultado_cuenta;*/
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla24` WHERE id='$id' ";
$resultado = mysql_query($ssql);
while ($row=mysql_fetch_object($resultado)){
/////////////////////////////////////////////////////////////

$id=$row->id;
$dia=$row->dia;
$horario=$row->horario;
$nombre1=$row->nombre1;
$nombre2=$row->nombre2;
$nombre3=$row->nombre3;
$nombre4=$row->nombre4;

$precio1=$row->precio1;
$precio2=$row->precio2;
$precio3=$row->precio3;
$precio4=$row->precio4;
$mes=$row->mes;
$debaja=$row->debaja;
$pista=$row->pista;
}

encabezado();
?>
	<link href='../../estilos.css' rel='stylesheet' type='text/css' />
<?php
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
echo "Fecha: ";
echo $fecha;
echo " ";
$mes=date(m);
echo $mes;
//echo strftime("%d %m %Y");
?>
<div id='boton_nuevo'><a href='abono.php'>ABONOS</a></div>
<br />
<br />
<br />

<form action="modifica_alumnos2.php" method="post" name="fcalen">
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
<input type='hidden' name='id' value='<?php echo $id; ?>'>
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
<input type='hidden' name='fecha' value='<?php echo $fecha; ?>'>
<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////

if ($pagado<1){ ?>
	<input type='hidden' name='fecha' value='<?php echo $fecha; ?>'>
<?php }else{ 

 } ?>

<fieldset id="alta_clientes">

	<legend>MODIFICA ABONOS</legend>
	
<table border="0" id='tabla_altas'>

	<tr>
<div id="nombre_alumno"> 

1&deg D&Iacute;A:  <select name="dia" style="width:130px" >
<option value="<?php echo $dia; ?>" selected="selected" ><?php echo $dia; ?></option>
            <option value="LUNES" >LUNES</option>
			<option value="MARTES" >MARTES</option>
			<option value="MIERCOLES">MIERCOLES</option>
            <option value="JUEVES">JUEVES</option>
			<option value="VIERNES">VIERNES</option>
			<option value="SABADO">SABADO</option>
            <option value="DOMINGO">DOMINGO</option>
		</select>
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; HORARIO: <select name="horario" style="width:130px" >
		<option value="<?php echo $horario; ?>" selected="selected" ><?php echo $horario; ?></option>

            <option value="09:30" >9:30</option>
			<option value="10:00" >10:00</option>
			<option value="12:00">12:00</option>
            <option value="16:30">16:30</option>
			<option value="18:00">18:00</option>
			<option value="19:30">19:30</option>
            <option value="21:00">21:00</option>
		</select>
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

1&deg; NOMBRE: <input type='text' name='nombre1' value='<?php echo $nombre1; ?>'  id="nombre" maxlength='60'>
<input type='text' name='precio1' value='<?php echo $precio1; ?>'  id="precio_abono" maxlength='3' placeholder="...&euro;">
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

2&deg; NOMBRE: <input type='text' name='nombre2' value='<?php echo $nombre2; ?>'  id="nombre" maxlength='60'>
<input type='text' name='precio2' value='<?php echo $precio2; ?>'  id="precio_abono" maxlength='3' >
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

3&deg; NOMBRE: <input type='text' name='nombre3' value='<?php echo $nombre3; ?>'  id="nombre" maxlength='60'>
<input type='text' name='precio3' value='<?php echo $precio3; ?>'  id="precio_abono" maxlength='3' >
</div>
</tr>
<tr>
<div id="nombre_alumno"> 

4&deg; NOMBRE: <input type='text' name='nombre4' value='<?php echo $nombre4; ?>'  id="nombre" maxlength='60'>
<input type='text' name='precio4' value='<?php echo $precio4; ?>'  id="precio_abono" maxlength='3' >
</div>
</tr>

<tr>
<div id="nombre_alumno"> 

5&deg; PISTA: <select name="pista" style="width:auto; height:23px;" >
            <option value="<?php echo $pista; ?>" selected="selected" ><?php echo "PISTA ".$pista; ?></option>
            <option value="1" >PISTA 1</option>
			<option value="2" >PISTA 2</option>
		</select>
</div>
</tr>

<tr>
   		
		<td colspan="2" align="right"><br><input type="submit" value="Guardar" id="boton"></td>
	</tr>
<br />
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
</table>

</form>
</fieldset>
<br>
   <?php 
		if ($debaja<1){ ?>
        <form action="debaja2.php" method="post" name="fcalen">
        <input type="submit" value="Dar de baja" id="boton">
        <input type='hidden' name='debaja' value='1'>
        <input type='hidden' name='pag' value='<?php echo $pag; ?>'>
		<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
		<input type='hidden' name='id' value='<?php echo $id; ?>'>
        </form>
         <?php }else{ ?>
        <form action="debaja2.php" method="post" name="fcalen">
        <input type="submit" value="Dar de Alta" id="boton">
        <input type='hidden' name='debaja' value='0'>
        <input type='hidden' name='pag' value='<?php echo $pag; ?>'>
		<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
		<input type='hidden' name='id' value='<?php echo $id; ?>'>
        </form> 
        <?php } ?>   
<?php

if($_GET['msj']==1){
	echo "<div id='bien'>DATOS MODIFICADOS CON &Eacute;XITO</div>";
}


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