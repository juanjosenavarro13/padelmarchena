<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");
include("../../includes.php");
$pag=$_SERVER['PHP_SELF'];
$pista=$_GET['id_pista'];

if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysqli_query($conexion,"DELETE FROM $tabla2 WHERE id_pista='$id_borrar'") or die(mysqli_error());
	mysqli_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();


$consulta_datos_pista=mysqli_query($conexion,"SELECT * FROM $tabla2 WHERE id_pista=$pista");
$row=mysqli_fetch_object($consulta_datos_pista);
	$id_pista=$row->id_pista;
	$nombre_pista=$row->nombre;
	$descripcion_pista=$row->descripcion;
	$bloque_horario=$row->bloque;
	$bloque_horario_fs=$row->bloque_fs;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////        GENERA LISTADO BLOQUES      //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaBloques($bloque_horario)
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysqli_query($conexion,"SELECT * FROM $tabla4");
	echo "<select name='bloque' id='campo'>";
	echo "<option value='0'>Elige el bloque horario</option>";
	while($registro=mysqli_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'";
			if($registro[0]==$bloque_horario){
				echo "selected";
			}
		echo ">".$registro[1]."</option>";
	}
	echo "</select>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////        GENERA LISTADO BLOQUES FS     //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaBloquesfs($bloque_horario_fs)
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysqli_query($conexion,"SELECT * FROM $tabla4");
	echo "<select name='bloque_fs' id='campo'>";
	echo "<option value='0'>Elige el bloque horario</option>";
	while($registro=mysqli_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'";
			if($registro[0]==$bloque_horario_fs){
				echo "selected";
			}
		echo ">".$registro[1]."</option>";
	}
	echo "</select>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<form action='editar_pista2.php' method='POST'>
<table border='0' id='tabla_gestion'>

<tr id='cabecera_tabla'>
	<td colspan='4' align='center'>ALTA DE PISTAS</td>
</tr>

<tr>
	<td>Nombre: </td>
	<td><input type='text' name='nombre_pista' id='campo' value='<?php echo $nombre_pista; ?>'></td>
	<td>Bloque horario: </td>
	<td>
		<?php generaBloques($bloque_horario); ?>
	</td>
</tr>

<tr>
	<td colspan='2'>&nbsp;</td>
	<td>Fin de semana: </td>
	<td>
		<?php generaBloquesfs($bloque_horario_fs); ?>
	</td>	
</tr>

<tr>
	<td colspan='4' align='center'>Detalles:<br>
		<textarea name='descripcion' rows='6' cols='50'><?php echo $descripcion_pista ?></textarea>
	</td>
</tr>

<tr>
	<td colspan='4' align='right'>
		<input type='submit' value='guardar' id='boton'>
	</td>
</tr>

</table>
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
<input type='hidden' name='id_pista' value='<?php echo $id_pista; ?>'>

</form>
<br><br><br>
<?php
if($_GET['msj']==1){
	echo "<div id='bien'>DATOS MODIFICADOS CON &Eacute;XITO</div>";
}
///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

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