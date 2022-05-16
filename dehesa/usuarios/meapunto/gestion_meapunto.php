<?php 
include ("../../seguridad.php");
include("../../conexion.php");
include("../funciones.php");
$pag=$_SERVER['PHP_SELF'];
session_start();
$usuario=$_SESSION['id'];

if ($_GET['accion']=="anular"){
	$id_anular= $_GET['id'];
	mysql_query("DELETE FROM $tabla8 WHERE id_reserva='$id_anular'") or die(mysql_error());
	mysql_close();
	//echo "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
	header ("Location: $pag");
	exit;
}

if ($_GET['accion']=="apuntar"){
 apuntar();
}

include("../../includes.php");
//include("enlaces.php");

encabezado();
	echo "<link href='../../estilos.css' rel='stylesheet' type='text/css' />";
cabecera();
col_izda1();
enlaces_izda();
administrar();
col_izda2();
cuerpo1();
///////////////////////////////////////		AKI COMIENZA LA WEB 		/////////////////////////////

$hoy=date("Y-m-d");
$hora_hoy=date("H:i");


 // returns "2 weeks, 4 days, 23 hours, 25 minutes, and 3 seconds from now"
$tiempo_seg=time();
////////////////   PROXIMO PARTIDO   ////////////////////////
$ssql_proximo = "select * from `$tabla8` WHERE dia>='$hoy' AND hora_inicio>='$tiempo_seg' ORDER BY dia, hora_inicio LIMIT 1";

$resultado_proximo = mysql_query($ssql_proximo);
$row_proximo=mysql_fetch_object($resultado_proximo);
$dia_inicio_proximo=$row_proximo->dia;
$horario_proximo=$row_proximo->horario;
//////////////////////////////////////////////////////////////


	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario_proximo = "select * FROM `$tabla3` WHERE id_horario=$horario_proximo";
	$resultado_horario_proximo = mysql_query($ssql_horario_proximo);
	if($resultado_horario_proximo!=''){
	$num_registros=mysql_num_rows($resultado_horario_proximo);
	$row_horario_proximo=mysql_fetch_object($resultado_horario_proximo);
	//$inicio_proximo=substr($row_horario->inicio,0,5);
	$hora_inicio_proximo=$row_horario_proximo->inicio;
	}
	/////////////////////////////////////////////////////////////

echo "<div id='crear_meapunto'><a href='alta_meapunto.php'>CREA UN NUEVO PARTIDO!!</a></div>";

if($row_proximo->id_meapunto!=0){

echo "Su proximo partido ser&aacute; en ".rel_time("$dia_inicio_proximo, $hora_inicio_proximo");

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

$ssql = "select * from `$tabla8` WHERE dia>='$hoy' AND hora_inicio>='$tiempo_seg' ORDER BY dia, hora_inicio";

$resultado = mysql_query($ssql);
/////////////////////////////////////////////////////////////

$segundos_hoy=time();
//echo $segundos_hoy;

echo "<table border='2' id='tabla_reservas'>";
echo "<tr id='titulo'>
			<td>Usuarios</td>
			<td>Nivel</td>
			<td>D&iacute;a</td>
			<td>Hora de inicio</td>
			<td>Hora de fin</td>
			<td>Pista</td>
			<td>&nbsp;</td>
		</tr>";
while ($row = mysql_fetch_object($resultado)){
$id_meapunto=$row->id_meapunto;
$pista=$row->pista;
$horario=$row->horario;
$dia_usa=$row->dia;
$nivel=$row->nivel_desde;
$fecha=explode("-",$dia_usa);
$dia=$fecha[2]."-".$fecha[1]."-".$fecha[0]; 
$segundos_reserva=$dia_usa*7*24*60*60;
//echo $segundos_reserva." ";
$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}

	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,fin FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$inicio=substr($row_horario->inicio,0,5);
	$fin=substr($row_horario->fin,0,5);
	/////////////////////////////////////////////////////////////

	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	/////////////////////////////////////////////////////////////
	
	
	echo "<tr id=$estilo>
				<td align='center'>";
//				$row_apuntados
datos_jugadores($id_meapunto);
	echo "	</td>";
				AbreviaturaNivel($nivel);
	echo "
				<td>$dia</td>
				<td>$inicio</td>
				<td>$fin</td>
				<td>$nombre_pista</td>
				<td>
				<a href='info_meapunto.php?id_meapunto=$id_meapunto'><img src='../../imagenes/ok.png' border='0'></a>
				<br>";
//				echo rel_time("$dia_usa,$inicio");
				
	echo "</td>
			</tr>";
}

echo "</table>";
?>
		<div id='boton_leyenda'><a target="_blank" onClick="window.open(this.href, this.target, 'width=300,height=200'); return false;" style="text-decoration: none" href='leyenda.php'>leyenda niveles</a></div>
<?php
}else{
	echo "<div id='sin_partidos'>No hay partidos actualmente</div>";
}

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
<br><br>