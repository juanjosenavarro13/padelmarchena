<?php
session_start();
include ("../seguridad.php");
include("../../conexion.php");
$pag=$_SERVER['PHP_SELF'];
if ($_GET['accion']=="borrar_tarifa"){
	$id_borrar= $_GET['id'];
	mysql_query("DELETE FROM $tabla15 WHERE id_tarifa='$id_borrar'") or die(mysql_error());
	mysql_close();
	$pagina=$_GET['pagina'];
	header ("Location: $pag");
	exit;
}
$tarifa=$_GET['tarifa'];
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla15` WHERE id_tarifa=$tarifa" ;
$resultado = mysql_query($ssql);
$row=mysql_fetch_object($resultado);
/////////////////////////////////////////////////////////////

$f2=$row->precio_soc;
$f = explode(".", $row->precio_soc['PHP_SELF']);
$precio_soc_euro=$f[count($f)-1];
$precio_soc_cent=substr ( $f2 , 2 ,  2 );
$precio_soc=$precio_soc_euro.".".$precio_soc_cent;

$g2=$row->precio_nosoc;
$g = explode(".", $row->precio_nosoc['PHP_SELF']);
$precio_nosoc_euro=$g[count($g)-1];
$precio_nosoc_cent=substr ( $g2 , 2 ,  2 );
$precio_nosoc=$precio_nosoc_euro.".".$precio_nosoc_cent;




include("../../includes.php");
include("../includes_gestion.php");
encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();

?>
<form action='edita_tarifas2.php' method='POST'>
<table border='0' id='tabla_gestion' width='600'>

<tr id='cabecera_tabla'>
	<td colspan='2' align='center'>ALTA DE NUEVAS TARIFAS</td>
</tr>

<tr>
	<td colspan='2' align='center'>Descripcion:	<input type='text' name='descripcion' value='<?php echo $row->descripcion; ?>'><br><br>
	</td>
</tr>

<tr>
	<td align='center'>Precio socio:	<input type='text' name='precio_soc' value='<?php echo $precio_soc; ?>'> &euro;
	</td>
	
	<td align='center'>Precio no socio:	<input type='text' name='precio_nosoc' value='<?php echo $precio_nosoc; ?>'> &euro;
	</td>
</tr>

<tr>
	<td colspan='2' align='right'>
		<input type='hidden' name='id_tarifa' value='<?php echo $tarifa; ?>'>
		<input type='submit' value='guardar' id='boton'>
	</td>
</tr>

</table>
<input type='hidden' name='pag' value='<?php echo $pag; ?>'>
</form>
<br><br>

<?php
listadoTarifas();

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