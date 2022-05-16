<?php 
include ("../../seguridad.php");
include("../../conexion.php");
$pag=$_SERVER['PHP_SELF'];
session_start();
$usuario=$_SESSION['id'];

if ($_GET['accion']=="anular"){
	$id_anular= $_GET['id'];
	mysqli_query($conexion, "DELETE FROM $tabla5 WHERE id_reserva='$id_anular' AND usuario='$usuario'") or die(mysqli_error());
	mysqli_close();
	//echo "DELETE FROM $tabla5 WHERE id_reserva='$id_anular'";
	header ("Location: $pag");
	exit;
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

function rel_time($from, $to = null)
 {
  $to = (($to === null) ? (time()) : ($to));
  $to = ((is_int($to)) ? ($to) : (strtotime($to)));
  $from = ((is_int($from)) ? ($from) : (strtotime($from)));

  $units = array
  (
   "a&ntilde;o"   => 29030400, // seconds in a year   (12 months)
   "mes"  => 2419200,  // seconds in a month  (4 weeks)
   "semana"   => 604800,   // seconds in a week   (7 days)
   "dia"    => 86400,    // seconds in a day    (24 hours)
   "hora"   => 3600,     // seconds in an hour  (60 minutes)
   "minuto" => 60,       // seconds in a minute (60 seconds)
//   "segundo" => 1         // 1 second
  );

  $diff = abs($from - $to);
//  $suffix = (($from > $to) ? ("from now") : ("ago"));

  foreach($units as $unit => $mult)
   if($diff >= $mult)
   {
    $and = (($mult != 60) ? ("") : (" "));
    $output .= " ".$and.intval($diff / $mult)." ".$unit.((intval($diff / $mult) == 1) ? ("") : ("s"));
    $diff -= intval($diff / $mult) * $mult;
   }
  $output .= " ".$suffix;
  $output = substr($output, strlen(" "));
  
  return $output;
}


 // returns "2 weeks, 4 days, 23 hours, 25 minutes, and 3 seconds from now"
$tiempo_seg=time();
////////////////   PROXIMO PARTIDO   ////////////////////////
$ssql_proximo = "select * from `$tabla5` WHERE usuario=$usuario AND dia>='$hoy' AND hora_inicio>='$tiempo_seg' ORDER BY dia, hora_inicio LIMIT 1";
$resultado_proximo = mysqli_query($conexion, $ssql_proximo);
$row_proximo=mysqli_fetch_object($resultado_proximo);
$dia_inicio_proximo=$row_proximo->dia;
$horario_proximo=$row_proximo->horario;


	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario_proximo = "select * FROM `$tabla3` WHERE id_horario=$horario_proximo";
	$resultado_horario_proximo = mysqli_query($conexion, $ssql_horario_proximo);
	if($resultado_horario_proximo!=''){
	$num_registros=mysqli_num_rows($resultado_horario_proximo);
	$row_horario_proximo=mysqli_fetch_object($resultado_horario_proximo);
	//$inicio_proximo=substr($row_horario->inicio,0,5);
	$hora_inicio_proximo=$row_horario_proximo->inicio;
	}
	/////////////////////////////////////////////////////////////


if($row_proximo->id_reserva!=0){

echo "Su proximo partido ser&aacute; en ".rel_time("$dia_inicio_proximo, $hora_inicio_proximo");

/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////

$ssql = "select * from `$tabla5` WHERE usuario=$usuario AND dia>='$hoy' AND hora_inicio>='$tiempo_seg' ORDER BY dia, hora_inicio";

$resultado = mysqli_query($conexion, $ssql);
/////////////////////////////////////////////////////////////

$segundos_hoy=time();
//echo $segundos_hoy;

echo "<table border='2' id='tabla_reservas'>";
echo "<tr id='titulo'>
			<td>Cod.</td>
			<td>D&iacute;a</td>
			<td>Hora de inicio</td>
			<td>Hora de fin</td>
			<td>Pista</td>
			<td>&nbsp;</td>
		</tr>";
while ($row = mysqli_fetch_object($resultado)){
$id_reserva=$row->id_reserva;
$usuario=$row->usuario;
$pista=$row->pista;
$horario=$row->horario;
$dia_usa=$row->dia;
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
	$resultado_horario = mysqli_query($conexion, $ssql_horario);
	$row_horario=mysqli_fetch_object($resultado_horario);
	$inicio=substr($row_horario->inicio,0,5);
	$fin=substr($row_horario->fin,0,5);
	/////////////////////////////////////////////////////////////

	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysqli_query($conexion, $ssql_pista);
	$row_pista=mysqli_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	/////////////////////////////////////////////////////////////
	
	
	echo "<tr id=$estilo>
				<td align='center'>$id_reserva</td>
				<td>$dia</td>
				<td>$inicio</td>
				<td>$fin</td>
				<td>$nombre_pista</td>
				<td><a href='?accion=anular&id=$id_reserva'>anular </a><br>";
				echo rel_time("$dia_usa,$inicio");
				
	echo "</td>
			</tr>";
}

echo "</table>";

}else{
	echo "<div id='sin_partidos'>no tienes partidos futuros</div>";
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
<br><br>