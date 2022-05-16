<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="borrar"){
	$id_borrar= $_GET['id'];
	mysql_query("DELETE FROM $tabla2 WHERE id_pista='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}
include("../../includes.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////        GENERA LISTADO BLOQUES      //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaBloques()
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysql_query("SELECT * FROM $tabla4");
	echo "<select name='bloque' id='campo'>";
	echo "<option value='0'>Elige el bloque horario</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////        GENERA LISTADO BLOQUES FS     //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaBloquesfs()
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysql_query("SELECT * FROM $tabla4");
	echo "<select name='bloque_fs' id='campo'>";
	echo "<option value='0'>Elige el bloque horario</option>";
	while($registro=mysql_fetch_row($consulta))
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
//////////////////////////////    GENERA LISTADO TIPOS DE PAGO      //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function generaTipopago()
{
	include("../../conexion.php"); //Nos conectamos a la base de datos
	$consulta=mysql_query("SELECT * FROM $tabla13");
	echo "<select name='Tipopago' id='campo'>";
	echo "<option value='0'>Elige el tipo de pago</option>";
	while($registro=mysql_fetch_row($consulta))
	{
		echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
	}
	echo "</select>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
<form action='alta_pistas2.php' method='POST'>
<table border='0' id='tabla_gestion'>

<tr id='cabecera_tabla'>
	<td colspan='4' align='center'>ALTA DE PISTAS</td>
</tr>

<tr>
	<td>Nombre: </td>
	<td><input type='text' name='nombre_pista' id='campo'></td>
	<td>Bloque horario: </td>
	<td>
		<?php generaBloques(); ?>
	</td>
</tr>

<tr>
	<td colspan='2'>&nbsp;</td>
	<td>Fin de semana: </td>
	<td>
		<?php generaBloquesfs(); ?>
	</td>	
</tr>

<tr>
	<td colspan='2'>&nbsp;</td>
	<td>Tipo de pago: </td>
	<td>
		<?php generaTipopago(); ?>
	</td>	
</tr>

<tr>
	<td colspan='4' align='center'>Detalles:<br>
		<textarea name='descripcion' rows='6' cols='50'></textarea>
	</td>
</tr>

<tr>
	<td colspan='4' align='right'>
		<input type='submit' value='guardar' id='boton'>
	</td>
</tr>

</table>
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
</form>
<br><br>

<?php

/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla2`";
$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

echo "<table border='2'  id='tabla_gestion' width='600'>";
echo "<tr id='cabecera_tabla'><td colspan='4' align='center'>LISTA DE PISTAS</td></tr>";
echo "<tr id='cabecera_tabla'> <td> <div id='texto_titulo'> ID</div></td> <td><div id='texto_titulo'> Nombre </div></td> <td> <div id='texto_titulo'> Descripcion </div></td> <td> <div id='texto_titulo'> &nbsp; </div></td></tr>";

$i=1;
while ($registro=mysql_fetch_row($resultado)){

$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

		echo "<tr id='".$estilo."'>";
			echo "<td>".$registro[0]."</td>";
			echo "<td>".$registro[1]."</td>";
			echo "<td>".$registro[2]."</td>";
			echo "<td><a href='?accion=borrar&id=$registro[0]'><img src='../../imagenes/delete.gif' name='borrar' alt='borrar' border='0'></a> <a href='?accion=detalles&id=$registro[0]'><img src='../../imagenes/edit.gif' name='borrar' alt='detalles' border='0'></a></td>";
	 echo "</tr>";
	}
	echo "</table>";


///////////////////////////////////////		AKI TERMINA LA WEB 		/////////////////////////////

cuerpo2();
/*
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
*/
pie();
?>