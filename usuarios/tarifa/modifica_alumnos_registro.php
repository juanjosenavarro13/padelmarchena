<?php
include ("../seguridad.php");
include("../../conexion.php");
include("../../includes.php");
$nombre=$_GET['nombre'];
$id=$_GET['id'];
$pag=$_SERVER['PHP_SELF'];
$fecha=date("Y:m:d");
/////////////////////////////////////////////////////////////
/*$ssql_cuenta = mysqli_query("select n_cuenta4 from `$tabla14` WHERE id_alumno='$id_alumno' ");
$resultado_cuenta = mysqli_fetch_row($ssql_cuenta);

echo $resultado_cuenta;*/
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla23` WHERE id='$id' ";
$resultado = mysqli_query($conexion, $ssql);
while ($row=mysqli_fetch_object($resultado)){
/////////////////////////////////////////////////////////////

$nombre=$row->nombre;
$apellido=$row->apellido;
$telefono=$row->telefono;
$numero_alumno=$row->numero_alumno;
$horas=$row->horas;
$precio=$row->precio;
$f_semana=$row->f_semana;
$pagado=$row->pagado;
$id=$row->id;
$n_cuenta=$row->n_cuenta;
$n_cuenta2=$row->n_cuenta2;
$n_cuenta3=$row->n_cuenta3;
$n_cuenta4=$row->n_cuenta4;
$debaja=$row->debaja;
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
<div id='boton_nuevo'><a href='pendiente_registro.php'>VOLVER</a></div>
<br />
<br />
<br />

<form action="modifica_alumnos_registro2.php" method="post" name="fcalen">
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
<input type='hidden' name='nombre' value='<?php echo $nombre; ?>'>
<input type='hidden' name='id_alumno' value='<?php echo $id_alumno; ?>'>
<input type='hidden' name='mes' value='<?php echo $mes; ?>'>
<?php
if ($pagado<1){ ?>
	<input type='hidden' name='fecha' value='<?php echo $fecha; ?>'>
<?php }else{ 

 } ?>

<fieldset id="alta_clientes">

	<legend>MODIFICA USUARIOS</legend>
	
<table border="0" id='tabla_altas'>

	<tr>
		<td>Nombre:</td><td><input type="text" name="nombre" value='<?php echo $nombre; ?>'> *</td>
	</tr>
	<tr>
		<td>Apellido:</td><td><input type="text" name="apellido" value='<?php echo $apellido; ?>'> *</td>
	</tr>
	<tr>
		<td>Telefono:</td><td><input type='text' name='telefono' value='<?php echo $telefono; ?>' /> *</td>
	</tr>
	<tr>
		<td>N&deg; Alumnos:</td><td><input type="text" name="numero_alumnos" value='<?php echo $numero_alumno; ?>' readonly> </td>
	</tr>
	<tr>
		<td>Horas semanales:</td><td><input type="text" name="horas" value='<?php echo $horas; ?>' readonly> </td>
	</tr>
    <tr>
		<td>Precio:</td><td><input type="text" name="precio" value='<?php echo $precio; ?> &euro;' readonly> </td>
	</tr>
    <tr>
		<td>Partido Fin de semana:</td><td><input type="text" name="f_semana" value='<?php echo $f_semana; ?>' readonly> </td>
        
	</tr>
    <tr>
		<td>
			<br />
    	</td>
   
		
    </tr>
	<tr>
   
		<td><b>Pagado:</b></td><td><input type='text' name='pagado' value='<?php echo $pagado; ?> &euro;' size="10px"> </td>
	</tr>
	
	<tr>
   		
		<td colspan="2" align="right"><br><input type="submit" value="Guardar" id="boton"></td>
	</tr>
		<tr>
   		<td colspan="2" align="left">
        
     
        </td>
        </tr>
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