<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	DATOS DE LOS JUGADORES ME APUNTO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function datos_jugadores($id_meapunto){

	include("../../conexion.php");
	$ssql_datos_clientes = "SELECT id_cliente FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_datos_clientes = mysql_query($ssql_datos_clientes);
	while ($row_datos_clientes=mysql_fetch_object($resultado_datos_clientes)){
//	echo $row_datos_clientes->id_cliente;	
	}

	////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$id_meapunto";
	$resultado_apuntados = mysql_query($ssql_apuntados);
	$row_apuntados=mysql_num_rows($resultado_apuntados);
//	echo 'total: '.$row_apuntados;
	if($row_apuntados==0){
		echo "
			<img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>
		";
	}elseif($row_apuntados==1){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>
		";	
	}elseif($row_apuntados==2){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'> <img src='../../imagenes/libre.png' alt='libre'>";
	}elseif($row_apuntados==3){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/libre.png' alt='libre'>";
	}elseif($row_apuntados==4){
		echo "
			<img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'> <img src='../../imagenes/jugador.png' alt='jugador'>";
	}
	/////////////////////////////////////////////////////////////

}
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	TIEMPO PARA EL PROXIMO PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
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


/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	APUNTAR JUGADORES A UN PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function apuntar(){
	include("../../conexion.php");
	$id_apuntar= $_GET['id'];
	$pag=$_SERVER['PHP_SELF'];	
	$cliente=$_SESSION['id'];

function mensaje(){
?>
<script language='JavaScript'>
alert("No puede estar mas de una vez en el mismo partido");
window.location="../meapunto/gestion_meapunto.php";
</script>
<?php 
} 
function mensaje_completo(){
?>
<script language='JavaScript'>
alert("El partido ya esta completo");
</script>
<?php 

} 

//////////////////////////////				GENERA EL ULTIMO ME APUNTO       ///////////////////////////
$napunto= mysql_query("SELECT MAX(id_cliente_meapunto) FROM $tabla9");
	while ($registro=mysql_fetch_row($napunto)){
	       foreach($registro as $clave){ 
	       //echo $clave;
	 	}
	 }

$id_cliente_meapunto=$clave+1;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////		GENERA SI EL JUGADOR YA ESTA		///////////////////////////////
$ssql_comprueba="SELECT id_cliente FROM $tabla9 WHERE id_cliente=$cliente AND id_meapunto=$id_apuntar";
$resultado_comprueba=mysql_query($ssql_comprueba);
$row_comprueba=mysql_num_rows($resultado_comprueba);

/////////////////////////////		GENERA SI EL PARTIDO ESTA COMPLETO		///////////////////////////////
$ssql_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$id_apuntar";
$resultado_apuntados = mysql_query($ssql_apuntados);
$row_apuntados=mysql_num_rows($resultado_apuntados);
//echo $ssql_apuntados;
//echo $row_apuntados;

	if($row_comprueba>=1){
		mensaje();
	}elseif($row_apuntados>=4){
		mensaje_completo();
	}else{
////////////////////////////////////////////////////////////////////////////////////////////////

		$campos="id_cliente_meapunto,id_cliente,id_meapunto";
		$datos="'$id_cliente_meapunto','$cliente','$id_apuntar'";

		$sentencia="INSERT INTO $tabla9 ($campos) VALUES ($datos)";
		$inserta=mysql_query($sentencia,$conexion);
		
		if($row_apuntados==3){
			$campos="completo='1'";
			$sentencia_modifica="UPDATE $base . `$tabla8` SET $campos WHERE $tabla8 . id_meapunto=$id_apuntar ";
			$modifica=mysql_query($sentencia_modifica,$conexion);
			//echo $sentencia;

			//////////////////////////////				GENERA LA ULTIMA RESERVA       ///////////////////////////

			$nreserva= mysql_query("SELECT MAX(id_reserva) FROM $tabla5");

				while ($registro=mysql_fetch_row($nreserva)){
	      		foreach($registro as $clave){ 
	       		//echo $clave;
	 				}
	 			}

			$id_reserva=$clave+1;

			//////////////////////////////////////////////////////////////////////////////////////////////////////
			//////////////////////////////////////////////////////////////////////////////////////////////////////
			
			/////////////////////////////////////////////////////////////
			$ssql = "select * from `$tabla8` WHERE id_meapunto=$id_apuntar";
			$resultado = mysql_query($ssql);
			$row = mysql_fetch_object($resultado);
			$pista=$row->pista;
			$horario=$row->horario;
			$dia=$row->dia;
			$fecha_seg=$row->hora_inicio;
			////////////////////////////////////////////////////////////

	$campos="id_reserva,usuario,pista,horario,dia,hora_inicio";
	$datos="'$id_reserva','0','$pista','$horario','$dia','$fecha_seg'";


	$sentencia="INSERT INTO $tabla5 ($campos) VALUES ($datos)";
//	echo $sentencia;
	$inserta=mysql_query($sentencia,$conexion);

		}
		mysql_close();
		header ("Location: ../meapunto/info_meapunto.php?id_meapunto=$id_apuntar");
		exit;
	}

}

/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////

function datos_horario($horario){
	include("../../conexion.php");
	////////////   DATOS DEL HORARIO   	/////////////////////////
	$ssql_horario = "select inicio,fin FROM `$tabla3` WHERE id_horario=$horario";
	$resultado_horario = mysql_query($ssql_horario);
	$row_horario=mysql_fetch_object($resultado_horario);
	$dia_meapunto=$row_horario->dia;
	$inicio=substr($row_horario->inicio,0,5);
	$fin=substr($row_horario->fin,0,5);
	echo "<span class='hora'>".$inicio."</span>";
	/////////////////////////////////////////////////////////////
}

function datos_pista($pista){
	include("../../conexion.php");
	////////////   DATOS DE LA PISTA   	/////////////////////////
	$ssql_pista = "select nombre FROM `$tabla2` WHERE id_pista=$pista";
	$resultado_pista = mysql_query($ssql_pista);
	$row_pista=mysql_fetch_object($resultado_pista);
	$nombre_pista=$row_pista->nombre;
	echo "<span class='pista'>".$nombre_pista."</span>";
	/////////////////////////////////////////////////////////////
}


/////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////	TABLA DE APUNTADOS EN UN PARTIDO		///////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
function tabla_apuntados($meapunto){
	include("../../conexion.php");
/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysql_query($ssql_enlace);
$row_enlace = mysql_fetch_object($resultado_enlace);
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
$ssql = "select * from `$tabla8` WHERE id_meapunto=$meapunto";
$resultado = mysql_query($ssql);
$row = mysql_fetch_object($resultado);
$pista=$row->pista;
$horario=$row->horario;
////////////////////////////////////////////////////////////
////////////   CUENTA APUNTADOS   	/////////////////////////
	$ssql_cuenta_apuntados = "SELECT id_cliente_meapunto FROM `$tabla9` WHERE id_meapunto=$meapunto";
	$resultado_cuenta_apuntados = mysql_query($ssql_cuenta_apuntados);
	$row_cuenta_apuntados=mysql_num_rows($resultado_cuenta_apuntados);
	$napuntados=$row_cuenta_apuntados;

echo "<div id='horario_pista'>";
datos_pista($pista);
datos_horario($horario);
echo "</div>";

if($napuntados>=1){
/////////////////////////////////////////////////////////////
echo "<table border='2' id='tabla_reservas'>";
echo "<tr id='titulo'>
			<td>Jugador</td>
			<td>Nick</td>
			<td colspan='2'>Nombre</td>

		</tr>";

/////////////////////////////////////////////////////////////
$ssql_enlace = "select * from `$tabla9` WHERE id_meapunto=$meapunto";
$resultado_enlace = mysql_query($ssql_enlace);
while ($row_enlace = mysql_fetch_object($resultado_enlace)){
/////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////
$jugador=$row_enlace->id_cliente;
$id_enlace=$row_enlace->id_cliente_meapunto;

$ssql_jugador = "select * from `$tabla1` WHERE id_usuario=$jugador";
$resultado_jugador = mysql_query($ssql_jugador);
$row_jugador=mysql_fetch_object($resultado_jugador);
$id_jugador=$row_jugador->id_usuario;
$nick=$row_jugador->nick;
$nivel=$row_jugador->nivel;
$nombre_jugador=$row_jugador->nombre." ".$row_jugador->apellido1;
/////////////////////////////////////////////////////////////

$segundos_hoy=time();
//echo $segundos_hoy;

//echo $segundos_reserva." ";
$i++;
if($i%2==0){
	$estilo="fila_par";
}else{
	$estilo="fila_inpar";
	}


	
	echo "<tr id=$estilo>
				<td align='center' width='50'>";

	echo $i;

	echo "</td>
				<td>$nick</td>
				<td colspan='2'>$nombre_jugador";
	if($id_jugador==$_SESSION['id'] AND $napuntados<=3){	
	echo "<a href='?accion=anular&id=$id_enlace'> <img src='../../imagenes/delete.gif' border='0'> </a>";
	}
	echo "</td>";
	//echo "<td>$nivel</td>";
	echo "</td>
			</tr>";


}
echo "</table>";

		echo "<br><br><a href='?accion=apuntar&id=$meapunto'><img src='../../imagenes/ok-txt.png' border='0'></a>";
		
}else{
	echo "<div id='se_el_primero'>
			<span class='texto'>Aun no hay ning&uacute;n jugador.<br>Se el primero en apuntarte.</span><br><br>
			<a href='?accion=apuntar&id=$meapunto'><img src='../../imagenes/ok-txt.png' border='0'></a>
			</div>";
}

}



?>